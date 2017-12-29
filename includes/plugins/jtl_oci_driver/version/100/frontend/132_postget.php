<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 26.10.2017
 * Time: 18:53
 */


require_once PFAD_ROOT . PFAD_CLASSES . 'class.JTL-Shop.Kunde.php';
require_once PFAD_ROOT . PFAD_BLOWFISH . 'xtea.class.php';
require_once PFAD_ROOT . PFAD_INCLUDES_LIBS . 'password_compat/password.php';
require_once PFAD_ROOT . PFAD_INCLUDES . 'wunschliste_inc.php';
require_once PFAD_ROOT . PFAD_INCLUDES . 'jtl_inc.php';

if (isset ($_REQUEST['HOOK_URL']) && empty($_SESSION['HOOK_URL'])) {
	$_SESSION['HOOK_URL'] = $_REQUEST['HOOK_URL'];
}

if (isset($_REQUEST['USERNAME'])) {
	$username = trim($_REQUEST['USERNAME']);
}else{
	$username = '';
}

if (isset($_REQUEST['PASSWORD'])) {
	$password = trim($_REQUEST['PASSWORD']);
}else{
	$password='';
}

if ((strtolower($username) == 'datev' && strtolower($password) == 'testoci')) {
	//if(!isset($_SESSION['OCI'])){
		//$_SESSION['Warenkorb'] = array();
	//}
	$_SESSION['OCI'] = true;
	customFuehreLoginAus('alex-fuchs@online.de', 'brest111');
}


/**
 * @param string $userLogin
 * @param string $passLogin
 */
function customFuehreLoginAus($userLogin, $passLogin)
{
	global $cHinweis;
	$Kunde = new Kunde();
	//$csrfTest = validateToken();
	$csrfTest = true;
	if ($csrfTest === false) {
		$cHinweis .= Shop::Lang()->get('csrfValidationFailed', 'global');
		Jtllog::writeLog('CSRF-Warnung fuer Login: ' . $userLogin, JTLLOG_LEVEL_ERROR);
	} else {
		$Einstellungen = Shop::getSettings([CONF_GLOBAL, CONF_KAUFABWICKLUNG, CONF_KUNDEN]);
		//$loginCaptchaOK = $Kunde->verifyLoginCaptcha($_POST);
		$loginCaptchaOK = true;
		if ($loginCaptchaOK === true) {
			$nReturnValue = $Kunde->holLoginKunde($userLogin, $passLogin);
			$nLoginversuche = $Kunde->nLoginversuche;
		} else {
			$nReturnValue = 4;
			$nLoginversuche = $loginCaptchaOK;
		}
		if ($Kunde->kKunde > 0) {
			unset($_SESSION['showLoginCaptcha']);
			$oKupons[] = !empty($_SESSION['VersandKupon']) ? $_SESSION['VersandKupon'] : null;
			$oKupons[] = !empty($_SESSION['oVersandfreiKupon']) ? $_SESSION['oVersandfreiKupon'] : null;
			$oKupons[] = !empty($_SESSION['NeukundenKupon']) ? $_SESSION['NeukundenKupon'] : null;
			$oKupons[] = !empty($_SESSION['Kupon']) ? $_SESSION['Kupon'] : null;
			//create new session id to prevent session hijacking
			session_regenerate_id(false);
			//in tbesucher kKunde setzen
			if (isset($_SESSION['oBesucher']->kBesucher) && $_SESSION['oBesucher']->kBesucher > 0) {
				Shop::DB()->update(
					'tbesucher',
					'kBesucher',
					(int)$_SESSION['oBesucher']->kBesucher,
					(object)['kKunde' => $Kunde->kKunde]
				);
			}
			if ($Kunde->cAktiv === 'Y') {
				unset(
					$_SESSION['Zahlungsart'],
					$_SESSION['Versandart'],
					$_SESSION['Lieferadresse'],
					$_SESSION['ks'],
					$_SESSION['VersandKupon'],
					$_SESSION['NeukundenKupon'],
					$_SESSION['Kupon'],
					$_SESSION['kKategorieVonUnterkategorien_arr'],
					$_SESSION['oKategorie_arr'],
					$_SESSION['oKategorie_arr_new']
				);
				// Kampagne
				if (isset($_SESSION['Kampagnenbesucher'])) {
					setzeKampagnenVorgang(KAMPAGNE_DEF_LOGIN, $Kunde->kKunde, 1.0); // Login
				}
				$session = Session::getInstance();
				$session->setCustomer($Kunde);
				// Setzt aktuelle Wunschliste (falls vorhanden) vom Kunden in die Session
				setzeWunschlisteInSession();
				// Redirect URL
				$cURL = StringHandler::filterXSS(verifyGPDataString('cURL'));
				// Lade WarenkorbPers
				$bPersWarenkorbGeladen = false;
				if ($Einstellungen['global']['warenkorbpers_nutzen'] === 'Y'
				    && count($_SESSION['Warenkorb']->PositionenArr) === 0
				) {
					$oWarenkorbPers = new WarenkorbPers($Kunde->kKunde);
					$oWarenkorbPers->ueberpruefePositionen(true);
					/** @var array('Warenkorb') $_SESSION['Warenkorb'] */
					if (count($oWarenkorbPers->oWarenkorbPersPos_arr) > 0) {
						foreach ($oWarenkorbPers->oWarenkorbPersPos_arr as $oWarenkorbPersPos) {
							if (empty($oWarenkorbPers->Artikel->bHasKonfig)) {
								// Gratisgeschenk in Warenkorb legen
								if ((int)$oWarenkorbPersPos->nPosTyp === (int)C_WARENKORBPOS_TYP_GRATISGESCHENK) {
									$kArtikelGeschenk = (int)$oWarenkorbPersPos->kArtikel;
									$oArtikelGeschenk = Shop::DB()->query(
										"SELECT tartikelattribut.kArtikel, tartikel.fLagerbestand, 
                                            tartikel.cLagerKleinerNull, tartikel.cLagerBeachten
                                            FROM tartikelattribut
                                            JOIN tartikel 
                                                ON tartikel.kArtikel = tartikelattribut.kArtikel
                                            WHERE tartikelattribut.kArtikel = " . $kArtikelGeschenk . "
                                                AND tartikelattribut.cName = '" . FKT_ATTRIBUT_GRATISGESCHENK . "'
                                                AND CAST(tartikelattribut.cWert AS DECIMAL) <= " .
										$_SESSION['Warenkorb']->gibGesamtsummeWarenExt([C_WARENKORBPOS_TYP_ARTIKEL], true), 1
									);

									if (isset($oArtikelGeschenk->kArtikel) && $oArtikelGeschenk->kArtikel > 0) {
										if ($oArtikelGeschenk->fLagerbestand > 0 ||
										    $oArtikelGeschenk->cLagerKleinerNull === 'Y' ||
										    $oArtikelGeschenk->cLagerBeachten === 'N'
										) {
											executeHook(HOOK_WARENKORB_PAGE_GRATISGESCHENKEINFUEGEN);
											$_SESSION['Warenkorb']->loescheSpezialPos(C_WARENKORBPOS_TYP_GRATISGESCHENK)
											                      ->fuegeEin($kArtikelGeschenk, 1, [], C_WARENKORBPOS_TYP_GRATISGESCHENK);
										}
									}
									// Konfigitems ohne Artikelbezug
								} elseif ($oWarenkorbPersPos->kArtikel === 0 && !empty($oWarenkorbPersPos->kKonfigitem)) {
									$oKonfigitem = new Konfigitem($oWarenkorbPersPos->kKonfigitem);
									$_SESSION['Warenkorb']->erstelleSpezialPos(
										$oKonfigitem->getName(),
										$oWarenkorbPersPos->fAnzahl,
										$oKonfigitem->getPreis(),
										$oKonfigitem->getSteuerklasse(),
										C_WARENKORBPOS_TYP_ARTIKEL,
										false,
										!$_SESSION['Kundengruppe']->nNettoPreise,
										'',
										$oWarenkorbPersPos->cUnique,
										$oWarenkorbPersPos->kKonfigitem,
										$oWarenkorbPersPos->kArtikel
									);
									//Artikel in den Warenkorb einfügen
								} else {
									fuegeEinInWarenkorb(
										$oWarenkorbPersPos->kArtikel,
										$oWarenkorbPersPos->fAnzahl,
										$oWarenkorbPersPos->oWarenkorbPersPosEigenschaft_arr,
										1,
										$oWarenkorbPersPos->cUnique,
										$oWarenkorbPersPos->kKonfigitem,
										null,
										false
									);
								}
							}
						}
						$_SESSION['Warenkorb']->setzePositionsPreise();
						$bPersWarenkorbGeladen = true;
					}
				}
				LinkHelper::getInstance()->buildLinkGroups(true);
				// Pruefe, ob Artikel im Warenkorb vorhanden sind,
				// welche für den aktuellen Kunden nicht mehr sichtbar sein duerfen
				pruefeWarenkorbArtikelSichtbarkeit($_SESSION['Kunde']->kKundengruppe);
				executeHook(HOOK_JTL_PAGE_REDIRECT);
				checkeWarenkorbEingang();
				if (strlen($cURL) > 0) {
					if (strpos($cURL, 'http') !== 0) {
						$cURL = Shop::getURL() . '/' . ltrim($cURL, '/');
					}
					header('Location: ' . $cURL, true, 301);
					exit();
				}
				if ($Einstellungen['global']['warenkorbpers_nutzen'] === 'Y' && !$bPersWarenkorbGeladen) {
					// Existiert ein pers. Warenkorb?
					// Wenn ja => frag Kunde ob er einen eventuell vorhandenen Warenkorb mergen möchte
					if ($Einstellungen['kaufabwicklung']['warenkorb_warenkorb2pers_merge'] === 'Y') {
						setzeWarenkorbPersInWarenkorb($_SESSION['Kunde']->kKunde);
					} elseif ($Einstellungen['kaufabwicklung']['warenkorb_warenkorb2pers_merge'] === 'P') {
						$oWarenkorbPers = new WarenkorbPers($Kunde->kKunde);
						if (count($oWarenkorbPers->oWarenkorbPersPos_arr) > 0) {
							Shop::Smarty()->assign('nWarenkorb2PersMerge', 1);
						}
					}
				}
				// Kupons übernehmen, wenn erst der Warenkorb befüllt und sich dann angemeldet wurde
				if (count($oKupons) > 0) {
					foreach ($oKupons as $Kupon) {
						if (!empty($Kupon)) {
							$Kuponfehler = checkeKupon($Kupon);
							$nReturnValue = angabenKorrekt($Kuponfehler);
							executeHook(HOOK_WARENKORB_PAGE_KUPONANNEHMEN_PLAUSI, [
								'error' => &$Kuponfehler,
								'nReturnValue' => &$nReturnValue
							]);
							if ($nReturnValue) {
								if (isset($Kupon->kKupon) && $Kupon->kKupon > 0 && $Kupon->cKuponTyp === 'standard') {
									kuponAnnehmen($Kupon);
									executeHook(HOOK_WARENKORB_PAGE_KUPONANNEHMEN);
								} elseif (!empty($Kupon->kKupon) && $Kupon->cKuponTyp === 'versandkupon') {
									// Versandfrei Kupon
									$_SESSION['oVersandfreiKupon'] = $Kupon;
									Shop::Smarty()->assign(
										'cVersandfreiKuponLieferlaender_arr',
										explode(';', $Kupon->cLieferlaender)
									);
								}
							} else {
								Shop::Smarty()->assign('cKuponfehler', $Kuponfehler['ungueltig']);
							}
						}
					}
				}
				// setzte Sprache auf Sprache des Kunden
				$oISOSprache = Shop::Lang()->getIsoFromLangID($Kunde->kSprache);
				if ((int)$_SESSION['kSprache'] !== (int)$Kunde->kSprache && !empty($oISOSprache->cISO)) {
					$_SESSION['kSprache'] = (int)$Kunde->kSprache;
					$_SESSION['cISOSprache'] = $oISOSprache->cISO;
					$_SESSION['currentLanguage'] = gibAlleSprachen(1)[$Kunde->kSprache];
					Shop::setLanguage($Kunde->kSprache, $oISOSprache->cISO);
					Shop::Lang()->setzeSprache($oISOSprache->cISO);
				}
			} else {
				$cHinweis .= Shop::Lang()->get('loginNotActivated', 'global');
			}
		} elseif ($nReturnValue === 2) { // Kunde ist gesperrt
			$cHinweis .= Shop::Lang()->get('accountLocked', 'global');
		} elseif ($nReturnValue === 3) { // Kunde ist nicht aktiv
			$cHinweis .= Shop::Lang()->get('accountInactive', 'global');
		} else {
			if (isset($Einstellungen['kunden']['kundenlogin_max_loginversuche']) &&
			    $Einstellungen['kunden']['kundenlogin_max_loginversuche'] !== ''
			) {
				$maxAttempts = (int)$Einstellungen['kunden']['kundenlogin_max_loginversuche'];
				if ($maxAttempts > 1 && $nLoginversuche >= $maxAttempts) {
					$_SESSION['showLoginCaptcha'] = true;
				}
			}
			$cHinweis .= Shop::Lang()->get('incorrectLogin', 'global');
		}
	}
}