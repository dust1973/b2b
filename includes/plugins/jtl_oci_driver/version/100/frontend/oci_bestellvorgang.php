<?php
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Alexander Fuchs <Alexander.Fuchs@kurz.de>, KURZ Group
 *
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 *
 *  Created by Alexander Fuchs <Alexander.Fuchs@kurz.de>, KURZ Group.
 *  Date: 23.10.2017  Time: 13:19
 *
 */
require_once PFAD_ROOT . PFAD_INCLUDES . 'warenkorb_inc.php';
require_once $oPlugin->cFrontendPfad . '../classes/OpenCatalogInterface.php';
global $bestellung, $Einstellungen, $smarty, $cart;
//print '<pre>';
//var_dump($_POST);
//print '<pre>';

/*Warenkorb Object
(
	[kWarenkorb] =>
    [kKunde] =>
    [kLieferadresse] =>
    [kZahlungsInfo] => 0
    [PositionenArr] => Array
(
	[0] => WarenkorbPos Object
(
	[kWarenkorbPos] =>
                    [kWarenkorb] =>
                    [kArtikel] => 70
                    [kSteuerklasse] => 3
                    [kVersandklasse] => 0
                    [nAnzahl] => 13
                    [nPosTyp] => 1
                    [fPreisEinzelNetto] => 20.501260504202
                    [fPreis] => 20.501260504202
                    [fMwSt] =>
                    [fGesamtgewicht] => 0
                    [cName] => Array
(
	[ger] => Printed Chiffon Dress S Green
[eng] => Printed Chiffon Dress S Green
                        )

                    [cEinheit] =>
                    [cGesamtpreisLocalized] => Array
(
	[0] => Array
	(
		[EUR] => 317,15 &euro;
                                )

                            [1] => Array
(
	[EUR] => 266,52 &euro;
                                )

                        )

                    [cHinweis] =>
                    [cUnique] =>
                    [kKonfigitem] => 0
                    [cKonfigpreisLocalized] =>
                    [Artikel] => Artikel Object
(
	[kArtikel] => 70
                            [kHersteller] => 0
                            [kLieferstatus] => 1
                            [kSteuerklasse] => 3
                            [kEinheit] => 0
                            [kVersandklasse] => 0
                            [kStueckliste] => 0
                            [kMassEinheit] => 0
                            [kGrundpreisEinheit] => 0
                            [kWarengruppe] => 0
                            [nLiefertageWennAusverkauft] => 0
                            [nAutomatischeLiefertageberechnung] => 0
                            [nBearbeitungszeit] => 0
                            [fLagerbestand] => 299
                            [fMindestbestellmenge] => 1
                            [fPackeinheit] => 1.0000
                            [fAbnahmeintervall] => 0
                            [fGewicht] => 0
                            [fUVP] => 0.00
                            [fUVPBrutto] => 0.00
                            [fVPEWert] => 0.0000
                            [fZulauf] => 0
                            [fMassMenge] => 0
                            [fGrundpreisMenge] => 0
                            [fBreite] => 0
                            [fHoehe] => 0
                            [fLaenge] => 0
                            [cName] => Printed Chiffon Dress S Green
[cSeo] =>
                            [cBeschreibung] => <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                            [cAnmerkung] =>
                            [cArtNr] => 37-PrestaShop
                            [cURL] => navi.php?a=70&lang=eng
                            [cURLFull] => http://localhost:81/shop/navi.php?a=70&lang=eng
                            [cVPE] => N
                            [cVPEEinheit] =>
                            [cSuchbegriffe] =>
                            [cTeilbar] => N
                            [cBarcode] =>
                            [cLagerBeachten] => Y
                            [cLagerKleinerNull] => N
                            [cLagerVariation] => N
                            [cKurzBeschreibung] => <p>Printed chiffon knee length dress with tank straps. Deep v-neckline.</p>
                            [cMwstVersandText] => including 19% VAT., plus <a href="navi.php?s=50" rel="nofollow" class="shipment">shipping</a>
                            [cLieferstatus] =>
                            [cVorschaubild] => gfx/keinBild.gif
                            [cHerstellerMetaTitle] =>
                            [cHerstellerMetaKeywords] =>
                            [cHerstellerMetaDescription] =>
                            [cHerstellerBeschreibung] =>
                            [dZulaufDatum] => 0000-00-00
                            [dMHD] => 0000-00-00
                            [dErscheinungsdatum] => 0000-00-00
                            [cTopArtikel] => N
                            [cNeu] => N
                            [Preise] => Preise Object
                                (
                                    [kKundengruppe] => 1
                                    [kArtikel] => 70
                                    [kKunde] => 1
                                    [cPreis1Localized] =>
                                    [cPreis2Localized] =>
                                    [cPreis3Localized] =>
                                    [cPreis4Localized] =>
                                    [cPreis5Localized] =>
                                    [cVKLocalized] =>
                                    [fVKNetto] => 20.501236
                                    [fVKBrutto] => 24.4
                                    [fPreis1] =>
                                    [fPreis2] =>
                                    [fPreis3] =>
                                    [fPreis4] =>
                                    [fPreis5] =>
                                    [fUst] => 19.00
                                    [alterVKNetto] =>
                                    [nAnzahl1] =>
                                    [nAnzahl2] =>
                                    [nAnzahl3] =>
                                    [nAnzahl4] =>
                                    [nAnzahl5] =>
                                    [strPreisGrafik_Detail] =>
                                    [strPreisGrafik_Suche] =>
                                    [alterVK] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis1] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis2] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis3] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis4] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis5] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [rabatt] =>
                                    [alterVKLocalized] =>
                                    [fVK] => Array
                                        (
                                            [0] => 24.4
                                            [1] => 20.501236
                                        )

                                    [nAnzahl_arr] => Array
                                        (
                                        )

                                    [fPreis_arr] => Array
                                        (
                                        )

                                    [fStaffelpreis_arr] => Array
                                        (
                                        )

                                    [cPreisLocalized_arr] => Array
                                        (
                                        )

                                    [strPreisGrafik_Topbox] =>
                                    [strPreisGrafik_Sonderbox] =>
                                    [strPreisGrafik_Neubox] =>
                                    [strPreisGrafik_Bestsellerbox] =>
                                    [strPreisGrafik_Zuletztbox] =>
                                    [strPreisGrafik_Baldbox] =>
                                    [cPreisGrafik_Boxen] =>
                                    [strPreisGrafik_TopboxStartseite] =>
                                    [strPreisGrafik_SonderboxStartseite] =>
                                    [strPreisGrafik_NeuboxStartseite] =>
                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                    [strPreisGrafik_BaldboxStartseite] =>
                                    [cPreisGrafik_Startseite] =>
                                    [cPreisGrafik_Artikeldetails] =>
                                    [strPreisGrafik_Uebersicht] =>
                                    [cPreisGrafik_Artikeluebersicht] =>
                                    [Sonderpreis_aktiv] =>
                                    [Kundenpreis_aktiv] =>
                                )

                            [Bilder] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [cPfadMini] => gfx/keinBild.gif
                                            [cPfadKlein] => gfx/keinBild.gif
                                            [cPfadNormal] => gfx/keinBild.gif
                                            [cPfadGross] => gfx/keinBild.gif
                                            [nNr] => 1
                                            [cAltAttribut] => Printed Chiffon Dress S Green
                                            [galleryJSON] => {"xs":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Printed Chiffon Dress S Green"},"sm":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Printed Chiffon Dress S Green"},"md":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Printed Chiffon Dress S Green"},"lg":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Printed Chiffon Dress S Green"}}
                                        )

                                )

                            [FunktionsAttribute] => Array
                                (
                                )

                            [Attribute] => Array
                                (
                                )

                            [AttributeAssoc] => Array
                                (
                                )

                            [Variationen] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 32
                                                            [kEigenschaft] => 13
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 67
                                                                    [tartikel_fLagerbestand] => 298
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 33
                                                            [kEigenschaft] => 13
                                                            [cName] => M
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 1
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 68
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [2] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 34
                                                            [kEigenschaft] => 13
                                                            [cName] => L
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 2
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 69
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 13
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 35
                                                            [kEigenschaft] => 14
                                                            [cName] => Green
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 10
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 70
                                                                    [tartikel_fLagerbestand] => 299
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 36
                                                            [kEigenschaft] => 14
                                                            [cName] => Yellow
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 11
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 67
                                                                    [tartikel_fLagerbestand] => 298
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 14
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [Sonderpreise] =>
                            [bSuchspecial_arr] =>
                            [oSuchspecialBild] =>
                            [bIsBestseller] => 0
                            [bIsTopBewertet] =>
                            [oProduktBundle_arr] =>
                            [oMedienDatei_arr] =>
                            [cMedienTyp_arr] =>
                            [nVariationsAufpreisVorhanden] => 0
                            [cMedienDateiAnzeige] =>
                            [oVariationKombi_arr] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [kEigenschaftKombi] => 37
                                            [kEigenschaft] => 13
                                            [kEigenschaftWert] => 32
                                        )

                                    [1] => stdClass Object
                                        (
                                            [kEigenschaftKombi] => 37
                                            [kEigenschaft] => 14
                                            [kEigenschaftWert] => 35
                                        )

                                )

                            [VariationenOhneFreifeld] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 32
                                                            [kEigenschaft] => 13
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 67
                                                                    [tartikel_fLagerbestand] => 298
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 33
                                                            [kEigenschaft] => 13
                                                            [cName] => M
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 1
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 68
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [2] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 34
                                                            [kEigenschaft] => 13
                                                            [cName] => L
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 2
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 69
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 13
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 35
                                                            [kEigenschaft] => 14
                                                            [cName] => Green
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 10
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 70
                                                                    [tartikel_fLagerbestand] => 299
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 36
                                                            [kEigenschaft] => 14
                                                            [cName] => Yellow
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 11
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 67
                                                                    [tartikel_fLagerbestand] => 298
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 14
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [oVariationenNurKind_arr] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 32
                                                            [kEigenschaft] => 13
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 67
                                                                    [tartikel_fLagerbestand] => 298
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 13
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 35
                                                            [kEigenschaft] => 14
                                                            [cName] => Green
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 10
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 70
                                                                    [tartikel_fLagerbestand] => 299
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 14
                                            [kArtikel] => 33
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [Lageranzeige] => stdClass Object
                                (
                                    [cLagerhinweis] => Array
                                        (
                                            [genau] => 299  In stock
                                            [verfuegbarkeit] => Product available
                                        )

                                    [nStatus] => 2
                                    [AmpelText] => Available now!
                                )

                            [kEigenschaftKombi] => 37
                            [kVaterArtikel] => 33
                            [nIstVater] => 0
                            [cVaterVKLocalized] =>
                            [oKategorie_arr] =>
                            [oKonfig_arr] => Array
                                (
                                )

                            [bHasKonfig] =>
                            [oMerkmale_arr] => Array
                                (
                                )

                            [cMerkmalAssoc_arr] =>
                            [cVariationKombi] => 13_32;14_35
                            [kEigenschaftKombi_arr] =>
                            [oVariationKombiVorschauText] =>
                            [oVariationDetailPreisKind_arr] => Array
                                (
                                    [32] => stdClass Object
                                        (
                                            [Preise] => Preise Object
                                                (
                                                    [kKundengruppe] => 1
                                                    [kArtikel] => 70
                                                    [kKunde] => 1
                                                    [cPreis1Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis2Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis3Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis4Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis5Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cVKLocalized] => Array
                                                        (
                                                            [0] => 24,40 &euro;
                                                            [1] => 20,50 &euro;
                                                        )

                                                    [fVKNetto] => 20.501236
                                                    [fVKBrutto] => 24.4
                                                    [fPreis1] =>
                                                    [fPreis2] =>
                                                    [fPreis3] =>
                                                    [fPreis4] =>
                                                    [fPreis5] =>
                                                    [fUst] => 19.00
                                                    [alterVKNetto] =>
                                                    [nAnzahl1] =>
                                                    [nAnzahl2] =>
                                                    [nAnzahl3] =>
                                                    [nAnzahl4] =>
                                                    [nAnzahl5] =>
                                                    [strPreisGrafik_Detail] =>
                                                    [strPreisGrafik_Suche] =>
                                                    [alterVK] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis1] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis2] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis3] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis4] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis5] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [rabatt] =>
                                                    [alterVKLocalized] =>
                                                    [fVK] => Array
                                                        (
                                                            [0] => 24.4
                                                            [1] => 20.501236
                                                        )

                                                    [nAnzahl_arr] => Array
                                                        (
                                                        )

                                                    [fPreis_arr] => Array
                                                        (
                                                        )

                                                    [fStaffelpreis_arr] => Array
                                                        (
                                                        )

                                                    [cPreisLocalized_arr] => Array
                                                        (
                                                        )

                                                    [strPreisGrafik_Topbox] =>
                                                    [strPreisGrafik_Sonderbox] =>
                                                    [strPreisGrafik_Neubox] =>
                                                    [strPreisGrafik_Bestsellerbox] =>
                                                    [strPreisGrafik_Zuletztbox] =>
                                                    [strPreisGrafik_Baldbox] =>
                                                    [cPreisGrafik_Boxen] =>
                                                    [strPreisGrafik_TopboxStartseite] =>
                                                    [strPreisGrafik_SonderboxStartseite] =>
                                                    [strPreisGrafik_NeuboxStartseite] =>
                                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                                    [strPreisGrafik_BaldboxStartseite] =>
                                                    [cPreisGrafik_Startseite] =>
                                                    [cPreisGrafik_Artikeldetails] =>
                                                    [strPreisGrafik_Uebersicht] =>
                                                    [cPreisGrafik_Artikeluebersicht] =>
                                                    [Sonderpreis_aktiv] =>
                                                    [Kundenpreis_aktiv] =>
                                                )

                                        )

                                    [35] => stdClass Object
                                        (
                                            [Preise] => Preise Object
                                                (
                                                    [kKundengruppe] => 1
                                                    [kArtikel] => 70
                                                    [kKunde] => 1
                                                    [cPreis1Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis2Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis3Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis4Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis5Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cVKLocalized] => Array
                                                        (
                                                            [0] => 24,40 &euro;
                                                            [1] => 20,50 &euro;
                                                        )

                                                    [fVKNetto] => 20.501236
                                                    [fVKBrutto] => 24.4
                                                    [fPreis1] =>
                                                    [fPreis2] =>
                                                    [fPreis3] =>
                                                    [fPreis4] =>
                                                    [fPreis5] =>
                                                    [fUst] => 19.00
                                                    [alterVKNetto] =>
                                                    [nAnzahl1] =>
                                                    [nAnzahl2] =>
                                                    [nAnzahl3] =>
                                                    [nAnzahl4] =>
                                                    [nAnzahl5] =>
                                                    [strPreisGrafik_Detail] =>
                                                    [strPreisGrafik_Suche] =>
                                                    [alterVK] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis1] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis2] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis3] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis4] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis5] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [rabatt] =>
                                                    [alterVKLocalized] =>
                                                    [fVK] => Array
                                                        (
                                                            [0] => 24.4
                                                            [1] => 20.501236
                                                        )

                                                    [nAnzahl_arr] => Array
                                                        (
                                                        )

                                                    [fPreis_arr] => Array
                                                        (
                                                        )

                                                    [fStaffelpreis_arr] => Array
                                                        (
                                                        )

                                                    [cPreisLocalized_arr] => Array
                                                        (
                                                        )

                                                    [strPreisGrafik_Topbox] =>
                                                    [strPreisGrafik_Sonderbox] =>
                                                    [strPreisGrafik_Neubox] =>
                                                    [strPreisGrafik_Bestsellerbox] =>
                                                    [strPreisGrafik_Zuletztbox] =>
                                                    [strPreisGrafik_Baldbox] =>
                                                    [cPreisGrafik_Boxen] =>
                                                    [strPreisGrafik_TopboxStartseite] =>
                                                    [strPreisGrafik_SonderboxStartseite] =>
                                                    [strPreisGrafik_NeuboxStartseite] =>
                                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                                    [strPreisGrafik_BaldboxStartseite] =>
                                                    [cPreisGrafik_Startseite] =>
                                                    [cPreisGrafik_Artikeldetails] =>
                                                    [strPreisGrafik_Uebersicht] =>
                                                    [cPreisGrafik_Artikeluebersicht] =>
                                                    [Sonderpreis_aktiv] =>
                                                    [Kundenpreis_aktiv] =>
                                                )

                                        )

                                )

                            [oVariationDetailPreis_arr] =>
                            [oProduktBundleMain] =>
                            [oProduktBundlePrice] =>
                            [inWarenkorbLegbar] => 1
                            [nVariationKombiNichtMoeglich_arr] => Array
                                (
                                )

                            [oVariBoxMatrixBild_arr] =>
                            [oVariationKombiVorschau_arr] =>
                            [cVariationenbilderVorhanden] =>
                            [nVariationenVerfuegbar] => 1
                            [nVariationAnzahl] => 2
                            [nVariationOhneFreifeldAnzahl] => 2
                            [Bewertungen] =>
                            [fDurchschnittsBewertung] => 0
                            [HilfreichsteBewertung] =>
                            [similarProducts] =>
                            [cacheID] => fa_70_9948ca94f910449290432b8b2e4f7d5f
                            [oFavourableShipping] => Versandart Object
                                (
                                    [kVersandart] => 7
                                    [kVersandberechnung] => 1
                                    [cVersandklassen] => -1
                                    [cName] => DHL Paket Inland
                                    [cLaender] => DE
                                    [cAnzeigen] => immer
                                    [cKundengruppen] => -1
                                    [cBild] =>
                                    [cNurAbhaengigeVersandart] => N
                                    [nSort] => 0
                                    [fPreis] => 4.20
                                    [fVersandkostenfreiAbX] => 0.00
                                    [fDeckelung] => 0.00
                                    [oVersandartSprache_arr] => Array
                                        (
                                            [eng] => stdClass Object
                                                (
                                                    [kVersandart] => 7
                                                    [cISOSprache] => eng
                                                    [cName] => DHL
                                                    [cLieferdauer] => 2-3 days
                                                    [cHinweistext] =>
                                                )

                                            [ger] => stdClass Object
                                                (
                                                    [kVersandart] => 7
                                                    [cISOSprache] => ger
                                                    [cName] => DHL
                                                    [cLieferdauer] => 2-3 tage
                                                    [cHinweistext] =>
                                                )

                                        )

                                    [oVersandartStaffel_arr] => Array
                                        (
                                        )

                                    [kRechnungsadresse] =>
                                    [cSendConfirmationMail] => Y
                                    [nMinLiefertage] => 2
                                    [nMaxLiefertage] => 3
                                    [eSteuer] => brutto
                                )

                            [cCachedCountryCode] => DE
                            [fLieferantenlagerbestand] => 0
                            [fLieferzeit] => 0
                            [cEstimatedDelivery] => 2 - 3 workdays
                            [oPreisradar] =>
                            [kVPEEinheit] => 0
                            [fMwSt] => 19.00
                            [fArtikelgewicht] => 0
                            [nSort] => 0
                            [dErstellt] => 2016-11-23
                            [dErstellt_de] => 23.11.2016
                            [dLetzteAktualisierung] =>
                            [cSerie] =>
                            [cISBN] =>
                            [cASIN] =>
                            [cHAN] =>
                            [cUNNummer] =>
                            [cGefahrnr] =>
                            [cTaric] =>
                            [cUPC] =>
                            [cHerkunftsland] =>
                            [cEPID] =>
                            [oStueckliste_arr] =>
                            [nVariationKombiUnique_arr] =>
                            [nErscheinendesProdukt] => 0
                            [nMinDeliveryDays] => 2
                            [nMaxDeliveryDays] => 3
                            [cEinheit] =>
                            [Erscheinungsdatum_de] => 00.00.0000
                            [cVersandklasse] =>
                            [fMaxRabatt] =>
                            [fNettoPreis] =>
                            [cAktivSonderpreis] => Y
                            [dSonderpreisStart_en] =>
                            [dSonderpreisEnde_en] =>
                            [dSonderpreisStart_de] =>
                            [dSonderpreisEnde_de] =>
                            [dZulaufDatum_de] =>
                            [dMHD_de] =>
                            [cBildpfad_thersteller] =>
                            [nMindestbestellmenge] =>
                            [cHersteller] =>
                            [cHerstellerSeo] =>
                            [cHerstellerURL] =>
                            [cHerstellerHomepage] =>
                            [cHerstellerBildKlein] =>
                            [cHerstellerBildNormal] =>
                            [cHerstellerSortNr] =>
                            [oDownload_arr] => Array
                                (
                                )

                            [oVariationKombiKinderAssoc_arr] =>
                            [oWarenlager_arr] =>
                            [cLocalizedVPE] =>
                            [cStaffelpreisLocalizedVPE1] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE2] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE3] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE4] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE5] => Array
                                (
                                )

                            [fStaffelpreisVPE1] => Array
                                (
                                )

                            [fStaffelpreisVPE2] => Array
                                (
                                )

                            [fStaffelpreisVPE3] => Array
                                (
                                )

                            [fStaffelpreisVPE4] => Array
                                (
                                )

                            [fStaffelpreisVPE5] => Array
                                (
                                )

                            [fStaffelpreisVPE_arr] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE_arr] => Array
                                (
                                )

                            [cGewicht] => 0,00
                            [cArtikelgewicht] => 0,00
                            [cSprachURL_arr] =>
                            [cUVPLocalized] => 0,00 &euro;
                            [verfuegbarkeitsBenachrichtigung] =>
                            [kArtikelVariKombi] =>
                            [kVariKindArtikel] =>
                            [cMasseinheitCode] =>
                            [cMasseinheitName] =>
                            [cGrundpreisEinheitCode] =>
                            [cGrundpreisEinheitName] =>
                            [isSimpleVariation] =>
                            [metaKeywords] => Fashion,has,been,creating,well\-designed,collections,since,2010,The,brand,offers,feminine,designs,delivering,stylish,separates,and,statement,dresses,which,evolved,into,a,full,ready\-to\-wear,collection,every,item,is,vital,part,of,woman,s,wardrobe,result\?,Cool,easy,chic,looks,youthful,elegance,unmistakable,signature,style,All,the,beautiful,pieces,are,made,Italy,manufactured,greatest,attention,Now,extends,to,range,accessories,including,shoes,hats,belts,more,
                            [metaTitle] => Printed Chiffon Dress S Green, 24,40 &euro;
                            [metaDescription] => Printed chiffon knee length dress with tank straps Deep v-neckline
                            [tags] => Array
                                (
                                )

                            [staffelPreis_arr] => Array
                                (
                                )

                            [taxData] => Array
                                (
                                    [net] =>
                                    [text] =>
                                    [tax] => 19
                                    [shippingFreeCountries] =>
                                    [countries] =>
                                    [shippingClass] =>
                                )

                            [cMassMenge] =>
                            [cLaenge] =>
                            [cBreite] =>
                            [cHoehe] =>
                            [cacheHit] =>
                            [cKurzbezeichnung] => Printed Chiffon Dress S Green
                            [languageURLs] => Array
                                (
                                )

                        )

                    [WarenkorbPosEigenschaftArr] => Array
                        (
                            [0] => WarenkorbPosEigenschaft Object
                                (
                                    [kWarenkorbPosEigenschaft] =>
                                    [kWarenkorbPos] =>
                                    [kEigenschaft] => 13
                                    [kEigenschaftWert] => 32
                                    [fAufpreis] => 0.0000
                                    [fGewichtsdifferenz] => 0.0000
                                    [cEigenschaftName] => Array
                                        (
                                            [ger] => Size
                                            [eng] => Size
                                        )

                                    [cEigenschaftWertName] => Array
                                        (
                                            [ger] => S
                                            [eng] => S
                                        )

                                    [cAufpreisLocalized] =>
                                    [cTyp] => SELECTBOX
                                )

                            [1] => WarenkorbPosEigenschaft Object
                                (
                                    [kWarenkorbPosEigenschaft] =>
                                    [kWarenkorbPos] =>
                                    [kEigenschaft] => 14
                                    [kEigenschaftWert] => 35
                                    [fAufpreis] => 0.0000
                                    [fGewichtsdifferenz] => 0.0000
                                    [cEigenschaftName] => Array
                                        (
                                            [ger] => Color
                                            [eng] => Color
                                        )

                                    [cEigenschaftWertName] => Array
                                        (
                                            [ger] => Green
                                            [eng] => Green
                                        )

                                    [cAufpreisLocalized] =>
                                    [cTyp] => SELECTBOX
                                )

                        )

                    [variationPicturesArr] => Array
                        (
                        )

                    [nZeitLetzteAenderung] => 1508784779
                    [fLagerbestandVorAbschluss] => 0
                    [kBestellpos] => 0
                    [cLieferstatus] => Array
                        (
                            [ger] => In stock
                            [eng] => In stock
                        )

                    [cArtNr] => 37-PrestaShop
                    [nAnzahlEinzel] =>
                    [cEinzelpreisLocalized] => Array
                        (
                            [0] => Array
                                (
                                    [EUR] => 24,40 &euro;
                                )

                            [1] => Array
                                (
                                    [EUR] => 20,50 &euro;
                                )

                        )

                    [cKonfigeinzelpreisLocalized] =>
                    [cEstimatedDelivery] => 2 - 3 workdays
                    [oEstimatedDelivery] => stdClass Object
                        (
                            [localized] => 2 - 3 workdays
                            [longestMin] => 2
                            [longestMax] => 3
                        )

                )

            [1] => WarenkorbPos Object
                (
                    [kWarenkorbPos] =>
                    [kWarenkorb] =>
                    [kArtikel] => 34
                    [kSteuerklasse] => 3
                    [kVersandklasse] => 0
                    [nAnzahl] => 5
                    [nPosTyp] => 1
                    [fPreisEinzelNetto] => 16.51
                    [fPreis] => 16.51
                    [fMwSt] =>
                    [fGesamtgewicht] => 0
                    [cName] => Array
                        (
                            [ger] => Faded Short Sleeve T-shirts S Orange
                            [eng] => Faded Short Sleeve T-shirts S Orange
                        )

                    [cEinheit] =>
                    [cGesamtpreisLocalized] => Array
                        (
                            [0] => Array
                                (
                                    [EUR] => 98,24 &euro;
                                )

                            [1] => Array
                                (
                                    [EUR] => 82,55 &euro;
                                )

                        )

                    [cHinweis] =>
                    [cUnique] =>
                    [kKonfigitem] => 0
                    [cKonfigpreisLocalized] =>
                    [Artikel] => Artikel Object
                        (
                            [kArtikel] => 34
                            [kHersteller] => 0
                            [kLieferstatus] => 1
                            [kSteuerklasse] => 3
                            [kEinheit] => 0
                            [kVersandklasse] => 0
                            [kStueckliste] => 0
                            [kMassEinheit] => 0
                            [kGrundpreisEinheit] => 0
                            [kWarengruppe] => 0
                            [nLiefertageWennAusverkauft] => 0
                            [nAutomatischeLiefertageberechnung] => 0
                            [nBearbeitungszeit] => 0
                            [fLagerbestand] => 296
                            [fMindestbestellmenge] => 1
                            [fPackeinheit] => 1.0000
                            [fAbnahmeintervall] => 0
                            [fGewicht] => 0
                            [fUVP] => 0.00
                            [fUVPBrutto] => 0.00
                            [fVPEWert] => 0.0000
                            [fZulauf] => 0
                            [fMassMenge] => 0
                            [fGrundpreisMenge] => 0
                            [fBreite] => 0
                            [fHoehe] => 0
                            [fLaenge] => 0
                            [cName] => Faded Short Sleeve T-shirts S Orange
                            [cSeo] =>
                            [cBeschreibung] => <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          [cAnmerkung] =>
                            [cArtNr] => 1-PrestaShop
[cURL] => navi.php?a=34&lang=eng
[cURLFull] => http://localhost:81/shop/navi.php?a=34&lang=eng
                            [cVPE] => N
[cVPEEinheit] =>
                            [cSuchbegriffe] =>
                            [cTeilbar] => N
[cBarcode] =>
                            [cLagerBeachten] => Y
[cLagerKleinerNull] => N
[cLagerVariation] => N
[cKurzBeschreibung] => <p>Faded short sleeve t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                            [cMwstVersandText] => including 19% VAT., plus <a href="navi.php?s=50" rel="nofollow" class="shipment">shipping</a>
                            [cLieferstatus] =>
                            [cVorschaubild] => gfx/keinBild.gif
                            [cHerstellerMetaTitle] =>
                            [cHerstellerMetaKeywords] =>
                            [cHerstellerMetaDescription] =>
                            [cHerstellerBeschreibung] =>
                            [dZulaufDatum] => 0000-00-00
                            [dMHD] => 0000-00-00
                            [dErscheinungsdatum] => 0000-00-00
                            [cTopArtikel] => N
                            [cNeu] => N
                            [Preise] => Preise Object
                                (
                                    [kKundengruppe] => 1
                                    [kArtikel] => 34
                                    [kKunde] => 1
                                    [cPreis1Localized] =>
                                    [cPreis2Localized] =>
                                    [cPreis3Localized] =>
                                    [cPreis4Localized] =>
                                    [cPreis5Localized] =>
                                    [cVKLocalized] =>
                                    [fVKNetto] => 16.51
                                    [fVKBrutto] => 19.65
                                    [fPreis1] =>
                                    [fPreis2] =>
                                    [fPreis3] =>
                                    [fPreis4] =>
                                    [fPreis5] =>
                                    [fUst] => 19.00
                                    [alterVKNetto] =>
                                    [nAnzahl1] =>
                                    [nAnzahl2] =>
                                    [nAnzahl3] =>
                                    [nAnzahl4] =>
                                    [nAnzahl5] =>
                                    [strPreisGrafik_Detail] =>
                                    [strPreisGrafik_Suche] =>
                                    [alterVK] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis1] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis2] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis3] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis4] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [fStaffelpreis5] => Array
                                        (
                                            [0] => 0
                                            [1] => 0
                                        )

                                    [rabatt] =>
                                    [alterVKLocalized] =>
                                    [fVK] => Array
                                        (
                                            [0] => 19.65
                                            [1] => 16.51
                                        )

                                    [nAnzahl_arr] => Array
                                        (
                                        )

                                    [fPreis_arr] => Array
                                        (
                                        )

                                    [fStaffelpreis_arr] => Array
                                        (
                                        )

                                    [cPreisLocalized_arr] => Array
                                        (
                                        )

                                    [strPreisGrafik_Topbox] =>
                                    [strPreisGrafik_Sonderbox] =>
                                    [strPreisGrafik_Neubox] =>
                                    [strPreisGrafik_Bestsellerbox] =>
                                    [strPreisGrafik_Zuletztbox] =>
                                    [strPreisGrafik_Baldbox] =>
                                    [cPreisGrafik_Boxen] =>
                                    [strPreisGrafik_TopboxStartseite] =>
                                    [strPreisGrafik_SonderboxStartseite] =>
                                    [strPreisGrafik_NeuboxStartseite] =>
                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                    [strPreisGrafik_BaldboxStartseite] =>
                                    [cPreisGrafik_Startseite] =>
                                    [cPreisGrafik_Artikeldetails] =>
                                    [strPreisGrafik_Uebersicht] =>
                                    [cPreisGrafik_Artikeluebersicht] =>
                                    [Sonderpreis_aktiv] =>
                                    [Kundenpreis_aktiv] =>
                                )

                            [Bilder] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [cPfadMini] => gfx/keinBild.gif
                                            [cPfadKlein] => gfx/keinBild.gif
                                            [cPfadNormal] => gfx/keinBild.gif
                                            [cPfadGross] => gfx/keinBild.gif
                                            [nNr] => 1
                                            [cAltAttribut] => Faded Short Sleeve T-shirts S Orange
                                            [galleryJSON] => {"xs":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Faded Short Sleeve T-shirts S Orange"},"sm":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Faded Short Sleeve T-shirts S Orange"},"md":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Faded Short Sleeve T-shirts S Orange"},"lg":{"src":"gfx\/keinBild.gif","size":{"width":130,"height":130},"type":1,"alt":"Faded Short Sleeve T-shirts S Orange"}}
                                        )

                                )

                            [FunktionsAttribute] => Array
                                (
                                )

                            [Attribute] => Array
                                (
                                )

                            [AttributeAssoc] => Array
                                (
                                )

                            [Variationen] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 1
                                                            [kEigenschaft] => 1
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 2
                                                            [kEigenschaft] => 1
                                                            [cName] => M
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 1
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 36
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [2] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 3
                                                            [kEigenschaft] => 1
                                                            [cName] => L
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 2
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 38
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 1
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 4
                                                            [kEigenschaft] => 2
                                                            [cName] => Orange
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 8
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 5
                                                            [kEigenschaft] => 2
                                                            [cName] => Blue
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 9
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 35
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 2
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [Sonderpreise] =>
                            [bSuchspecial_arr] =>
                            [oSuchspecialBild] =>
                            [bIsBestseller] =>
                            [bIsTopBewertet] =>
                            [oProduktBundle_arr] =>
                            [oMedienDatei_arr] =>
                            [cMedienTyp_arr] =>
                            [nVariationsAufpreisVorhanden] => 0
                            [cMedienDateiAnzeige] =>
                            [oVariationKombi_arr] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [kEigenschaftKombi] => 1
                                            [kEigenschaft] => 1
                                            [kEigenschaftWert] => 1
                                        )

                                    [1] => stdClass Object
                                        (
                                            [kEigenschaftKombi] => 1
                                            [kEigenschaft] => 2
                                            [kEigenschaftWert] => 4
                                        )

                                )

                            [VariationenOhneFreifeld] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 1
                                                            [kEigenschaft] => 1
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 2
                                                            [kEigenschaft] => 1
                                                            [cName] => M
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 1
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 36
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [2] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 3
                                                            [kEigenschaft] => 1
                                                            [cName] => L
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 2
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 38
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 1
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 4
                                                            [kEigenschaft] => 2
                                                            [cName] => Orange
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 8
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 5
                                                            [kEigenschaft] => 2
                                                            [cName] => Blue
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 9
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 35
                                                                    [tartikel_fLagerbestand] => 300
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 2
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [oVariationenNurKind_arr] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 1
                                                            [kEigenschaft] => 1
                                                            [cName] => S
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 0
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 1
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 0
                                            [cName] => Size
                                            [nLieferbareVariationswerte] => 3
                                        )

                                    [1] => stdClass Object
                                        (
                                            [Werte] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [kEigenschaftWert] => 4
                                                            [kEigenschaft] => 2
                                                            [cName] => Orange
                                                            [fAufpreisNetto] => 0.0000
                                                            [fGewichtDiff] => 0.0000
                                                            [cArtNr] => 0
                                                            [nSort] => 8
                                                            [fLagerbestand] => 0
                                                            [fPackeinheit] => 1
                                                            [oVariationsKombi] => stdClass Object
                                                                (
                                                                    [kArtikel] => 34
                                                                    [tartikel_fLagerbestand] => 296
                                                                    [cLagerBeachten] => Y
                                                                    [cLagerKleinerNull] => N
                                                                    [cLagerVariation] => N
                                                                )

                                                        )

                                                )

                                            [kEigenschaft] => 2
                                            [kArtikel] => 27
                                            [cWaehlbar] => Y
                                            [cTyp] => SELECTBOX
                                            [nSort] => 1
                                            [cName] => Color
                                            [nLieferbareVariationswerte] => 2
                                        )

                                )

                            [Lageranzeige] => stdClass Object
                                (
                                    [cLagerhinweis] => Array
                                        (
                                            [genau] => 296  In stock
                                            [verfuegbarkeit] => Product available
                                        )

                                    [nStatus] => 2
                                    [AmpelText] => Available now!
                                )

                            [kEigenschaftKombi] => 1
                            [kVaterArtikel] => 27
                            [nIstVater] => 0
                            [cVaterVKLocalized] =>
                            [oKategorie_arr] =>
                            [oKonfig_arr] => Array
                                (
                                )

                            [bHasKonfig] =>
                            [oMerkmale_arr] => Array
                                (
                                )

                            [cMerkmalAssoc_arr] =>
                            [cVariationKombi] => 1_1;2_4
                            [kEigenschaftKombi_arr] =>
                            [oVariationKombiVorschauText] =>
                            [oVariationDetailPreisKind_arr] => Array
                                (
                                    [1] => stdClass Object
                                        (
                                            [Preise] => Preise Object
                                                (
                                                    [kKundengruppe] => 1
                                                    [kArtikel] => 34
                                                    [kKunde] => 1
                                                    [cPreis1Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis2Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis3Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis4Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis5Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cVKLocalized] => Array
                                                        (
                                                            [0] => 19,65 &euro;
                                                            [1] => 16,51 &euro;
                                                        )

                                                    [fVKNetto] => 16.51
                                                    [fVKBrutto] => 19.65
                                                    [fPreis1] =>
                                                    [fPreis2] =>
                                                    [fPreis3] =>
                                                    [fPreis4] =>
                                                    [fPreis5] =>
                                                    [fUst] => 19.00
                                                    [alterVKNetto] =>
                                                    [nAnzahl1] =>
                                                    [nAnzahl2] =>
                                                    [nAnzahl3] =>
                                                    [nAnzahl4] =>
                                                    [nAnzahl5] =>
                                                    [strPreisGrafik_Detail] =>
                                                    [strPreisGrafik_Suche] =>
                                                    [alterVK] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis1] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis2] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis3] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis4] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis5] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [rabatt] =>
                                                    [alterVKLocalized] =>
                                                    [fVK] => Array
                                                        (
                                                            [0] => 19.65
                                                            [1] => 16.51
                                                        )

                                                    [nAnzahl_arr] => Array
                                                        (
                                                        )

                                                    [fPreis_arr] => Array
                                                        (
                                                        )

                                                    [fStaffelpreis_arr] => Array
                                                        (
                                                        )

                                                    [cPreisLocalized_arr] => Array
                                                        (
                                                        )

                                                    [strPreisGrafik_Topbox] =>
                                                    [strPreisGrafik_Sonderbox] =>
                                                    [strPreisGrafik_Neubox] =>
                                                    [strPreisGrafik_Bestsellerbox] =>
                                                    [strPreisGrafik_Zuletztbox] =>
                                                    [strPreisGrafik_Baldbox] =>
                                                    [cPreisGrafik_Boxen] =>
                                                    [strPreisGrafik_TopboxStartseite] =>
                                                    [strPreisGrafik_SonderboxStartseite] =>
                                                    [strPreisGrafik_NeuboxStartseite] =>
                                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                                    [strPreisGrafik_BaldboxStartseite] =>
                                                    [cPreisGrafik_Startseite] =>
                                                    [cPreisGrafik_Artikeldetails] =>
                                                    [strPreisGrafik_Uebersicht] =>
                                                    [cPreisGrafik_Artikeluebersicht] =>
                                                    [Sonderpreis_aktiv] =>
                                                    [Kundenpreis_aktiv] =>
                                                )

                                        )

                                    [4] => stdClass Object
                                        (
                                            [Preise] => Preise Object
                                                (
                                                    [kKundengruppe] => 1
                                                    [kArtikel] => 34
                                                    [kKunde] => 1
                                                    [cPreis1Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis2Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis3Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis4Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cPreis5Localized] => Array
                                                        (
                                                            [0] => 0,00 &euro;
                                                            [1] => 0,00 &euro;
                                                        )

                                                    [cVKLocalized] => Array
                                                        (
                                                            [0] => 19,65 &euro;
                                                            [1] => 16,51 &euro;
                                                        )

                                                    [fVKNetto] => 16.51
                                                    [fVKBrutto] => 19.65
                                                    [fPreis1] =>
                                                    [fPreis2] =>
                                                    [fPreis3] =>
                                                    [fPreis4] =>
                                                    [fPreis5] =>
                                                    [fUst] => 19.00
                                                    [alterVKNetto] =>
                                                    [nAnzahl1] =>
                                                    [nAnzahl2] =>
                                                    [nAnzahl3] =>
                                                    [nAnzahl4] =>
                                                    [nAnzahl5] =>
                                                    [strPreisGrafik_Detail] =>
                                                    [strPreisGrafik_Suche] =>
                                                    [alterVK] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis1] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis2] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis3] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis4] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [fStaffelpreis5] => Array
                                                        (
                                                            [0] => 0
                                                            [1] => 0
                                                        )

                                                    [rabatt] =>
                                                    [alterVKLocalized] =>
                                                    [fVK] => Array
                                                        (
                                                            [0] => 19.65
                                                            [1] => 16.51
                                                        )

                                                    [nAnzahl_arr] => Array
                                                        (
                                                        )

                                                    [fPreis_arr] => Array
                                                        (
                                                        )

                                                    [fStaffelpreis_arr] => Array
                                                        (
                                                        )

                                                    [cPreisLocalized_arr] => Array
                                                        (
                                                        )

                                                    [strPreisGrafik_Topbox] =>
                                                    [strPreisGrafik_Sonderbox] =>
                                                    [strPreisGrafik_Neubox] =>
                                                    [strPreisGrafik_Bestsellerbox] =>
                                                    [strPreisGrafik_Zuletztbox] =>
                                                    [strPreisGrafik_Baldbox] =>
                                                    [cPreisGrafik_Boxen] =>
                                                    [strPreisGrafik_TopboxStartseite] =>
                                                    [strPreisGrafik_SonderboxStartseite] =>
                                                    [strPreisGrafik_NeuboxStartseite] =>
                                                    [strPreisGrafik_BestsellerboxStartseite] =>
                                                    [strPreisGrafik_ZuletztboxStartseite] =>
                                                    [strPreisGrafik_BaldboxStartseite] =>
                                                    [cPreisGrafik_Startseite] =>
                                                    [cPreisGrafik_Artikeldetails] =>
                                                    [strPreisGrafik_Uebersicht] =>
                                                    [cPreisGrafik_Artikeluebersicht] =>
                                                    [Sonderpreis_aktiv] =>
                                                    [Kundenpreis_aktiv] =>
                                                )

                                        )

                                )

                            [oVariationDetailPreis_arr] =>
                            [oProduktBundleMain] =>
                            [oProduktBundlePrice] =>
                            [inWarenkorbLegbar] => 1
                            [nVariationKombiNichtMoeglich_arr] => Array
                                (
                                )

                            [oVariBoxMatrixBild_arr] =>
                            [oVariationKombiVorschau_arr] =>
                            [cVariationenbilderVorhanden] =>
                            [nVariationenVerfuegbar] => 1
                            [nVariationAnzahl] => 2
                            [nVariationOhneFreifeldAnzahl] => 2
                            [Bewertungen] =>
                            [fDurchschnittsBewertung] => 0
                            [HilfreichsteBewertung] =>
                            [similarProducts] =>
                            [cacheID] => fa_34_120ddbbc8d497ca54005c8c4c3839001
                            [oFavourableShipping] => Versandart Object
                                (
                                    [kVersandart] => 7
                                    [kVersandberechnung] => 1
                                    [cVersandklassen] => -1
                                    [cName] => DHL Paket Inland
                                    [cLaender] => DE
                                    [cAnzeigen] => immer
                                    [cKundengruppen] => -1
                                    [cBild] =>
                                    [cNurAbhaengigeVersandart] => N
                                    [nSort] => 0
                                    [fPreis] => 4.20
                                    [fVersandkostenfreiAbX] => 0.00
                                    [fDeckelung] => 0.00
                                    [oVersandartSprache_arr] => Array
                                        (
                                            [eng] => stdClass Object
                                                (
                                                    [kVersandart] => 7
                                                    [cISOSprache] => eng
                                                    [cName] => DHL
                                                    [cLieferdauer] => 2-3 days
                                                    [cHinweistext] =>
                                                )

                                            [ger] => stdClass Object
                                                (
                                                    [kVersandart] => 7
                                                    [cISOSprache] => ger
                                                    [cName] => DHL
                                                    [cLieferdauer] => 2-3 tage
                                                    [cHinweistext] =>
                                                )

                                        )

                                    [oVersandartStaffel_arr] => Array
                                        (
                                        )

                                    [kRechnungsadresse] =>
                                    [cSendConfirmationMail] => Y
                                    [nMinLiefertage] => 2
                                    [nMaxLiefertage] => 3
                                    [eSteuer] => brutto
                                )

                            [cCachedCountryCode] => DE
                            [fLieferantenlagerbestand] => 0
                            [fLieferzeit] => 0
                            [cEstimatedDelivery] => 2 - 3 workdays
                            [oPreisradar] =>
                            [kVPEEinheit] => 0
                            [fMwSt] => 19.00
                            [fArtikelgewicht] => 0
                            [nSort] => 0
                            [dErstellt] => 2016-11-23
                            [dErstellt_de] => 23.11.2016
                            [dLetzteAktualisierung] =>
                            [cSerie] =>
                            [cISBN] =>
                            [cASIN] =>
                            [cHAN] =>
                            [cUNNummer] =>
                            [cGefahrnr] =>
                            [cTaric] =>
                            [cUPC] =>
                            [cHerkunftsland] =>
                            [cEPID] =>
                            [oStueckliste_arr] =>
                            [nVariationKombiUnique_arr] =>
                            [nErscheinendesProdukt] => 0
                            [nMinDeliveryDays] => 2
                            [nMaxDeliveryDays] => 3
                            [cEinheit] =>
                            [Erscheinungsdatum_de] => 00.00.0000
                            [cVersandklasse] =>
                            [fMaxRabatt] =>
                            [fNettoPreis] =>
                            [cAktivSonderpreis] => Y
                            [dSonderpreisStart_en] =>
                            [dSonderpreisEnde_en] =>
                            [dSonderpreisStart_de] =>
                            [dSonderpreisEnde_de] =>
                            [dZulaufDatum_de] =>
                            [dMHD_de] =>
                            [cBildpfad_thersteller] =>
                            [nMindestbestellmenge] =>
                            [cHersteller] =>
                            [cHerstellerSeo] =>
                            [cHerstellerURL] =>
                            [cHerstellerHomepage] =>
                            [cHerstellerBildKlein] =>
                            [cHerstellerBildNormal] =>
                            [cHerstellerSortNr] =>
                            [oDownload_arr] => Array
                                (
                                )

                            [oVariationKombiKinderAssoc_arr] =>
                            [oWarenlager_arr] =>
                            [cLocalizedVPE] =>
                            [cStaffelpreisLocalizedVPE1] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE2] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE3] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE4] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE5] => Array
                                (
                                )

                            [fStaffelpreisVPE1] => Array
                                (
                                )

                            [fStaffelpreisVPE2] => Array
                                (
                                )

                            [fStaffelpreisVPE3] => Array
                                (
                                )

                            [fStaffelpreisVPE4] => Array
                                (
                                )

                            [fStaffelpreisVPE5] => Array
                                (
                                )

                            [fStaffelpreisVPE_arr] => Array
                                (
                                )

                            [cStaffelpreisLocalizedVPE_arr] => Array
                                (
                                )

                            [cGewicht] => 0,00
                            [cArtikelgewicht] => 0,00
                            [cSprachURL_arr] =>
                            [cUVPLocalized] => 0,00 &euro;
                            [verfuegbarkeitsBenachrichtigung] =>
                            [kArtikelVariKombi] =>
                            [kVariKindArtikel] =>
                            [cMasseinheitCode] =>
                            [cMasseinheitName] =>
                            [cGrundpreisEinheitCode] =>
                            [cGrundpreisEinheitName] =>
                            [isSimpleVariation] =>
                            [metaKeywords] => Fashion,has,been,creating,well\-designed,collections,since,2010,The,brand,offers,feminine,designs,delivering,stylish,separates,and,statement,dresses,which,evolved,into,a,full,ready\-to\-wear,collection,every,item,is,vital,part,of,woman,s,wardrobe,result\?,Cool,easy,chic,looks,youthful,elegance,unmistakable,signature,style,All,the,beautiful,pieces,are,made,Italy,manufactured,greatest,attention,Now,extends,to,range,accessories,including,shoes,hats,belts,more,
                            [metaTitle] => Faded Short Sleeve T-shirts S Orange, 19,65 &euro;
                            [metaDescription] => Faded short sleeve t-shirt with high neckline Soft and stretchy material for a comfortable fit Accessorize with a straw hat and you're ready for summer!
[tags] => Array
(
)

[staffelPreis_arr] => Array
(
)

[taxData] => Array
(
	[net] =>
		[text] =>
                                    [tax] => 19
                                    [shippingFreeCountries] =>
                                    [countries] =>
                                    [shippingClass] =>
                                )

                            [cMassMenge] =>
                            [cLaenge] =>
                            [cBreite] =>
                            [cHoehe] =>
                            [cacheHit] =>
                            [cKurzbezeichnung] => Faded Short Sleeve T-shirts S Orange
[languageURLs] => Array
(
)

                        )

                    [WarenkorbPosEigenschaftArr] => Array
(
	[0] => WarenkorbPosEigenschaft Object
(
	[kWarenkorbPosEigenschaft] =>
                                    [kWarenkorbPos] =>
                                    [kEigenschaft] => 1
                                    [kEigenschaftWert] => 1
                                    [fAufpreis] => 0.0000
                                    [fGewichtsdifferenz] => 0.0000
                                    [cEigenschaftName] => Array
(
	[ger] => Size
	[eng] => Size
                                        )

                                    [cEigenschaftWertName] => Array
(
	[ger] => S
	[eng] => S
                                        )

                                    [cAufpreisLocalized] =>
                                    [cTyp] => SELECTBOX
                                )

                            [1] => WarenkorbPosEigenschaft Object
(
	[kWarenkorbPosEigenschaft] =>
                                    [kWarenkorbPos] =>
                                    [kEigenschaft] => 2
                                    [kEigenschaftWert] => 4
                                    [fAufpreis] => 0.0000
                                    [fGewichtsdifferenz] => 0.0000
                                    [cEigenschaftName] => Array
(
	[ger] => Color
	[eng] => Color
                                        )

                                    [cEigenschaftWertName] => Array
(
	[ger] => Orange
	[eng] => Orange
                                        )

                                    [cAufpreisLocalized] =>
                                    [cTyp] => SELECTBOX
                                )

                        )

                    [variationPicturesArr] => Array
(
)

[nZeitLetzteAenderung] => 1508784880
                    [fLagerbestandVorAbschluss] => 0
                    [kBestellpos] => 0
                    [cLieferstatus] => Array
(
	[ger] =>
		[eng] =>
                        )

                    [cArtNr] => 1-PrestaShop
[nAnzahlEinzel] =>
                    [cEinzelpreisLocalized] => Array
(
	[0] => Array
	(
		[EUR] => 19,65 &euro;
                                )

                            [1] => Array
(
	[EUR] => 16,51 &euro;
                                )

                        )

                    [cKonfigeinzelpreisLocalized] =>
                    [cEstimatedDelivery] => 2 - 3 workdays
[oEstimatedDelivery] => stdClass Object
(
	[localized] => 2 - 3 workdays
[longestMin] => 2
                            [longestMax] => 3
                        )

                )

        )

    [cEstimatedDelivery] => 2 - 3 workdays
[cChecksumme] =>
    [Waehrung] =>
)*/

//$request='---------------------------------------------------------------------------------------------'."\r\n";
$header = '<table class="table">';
foreach(getallheaders() as $name=>$value){
	$header .= "<tr><td>$name: $value</td></tr>";
}
$header .= "</table>";

$request = '';
$i = 0;
if ( count( $cart->PositionenArr ) > 0 ) {

	foreach ( $cart->PositionenArr as $positionArr ) {

	
		$i ++;
		$request .='<table class="table table-bordered">';
		$request .='<tr><td>NEW_ITEM-DESCRIPTION[%d]</td><td>'. sprintf("%s", $positionArr->cName['ger']).'</td>';
		$request .='<tr><td>NEW_ITEM-MATNR[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-QUANTITY[%d]</td><td>'.sprintf("%.3f",$positionArr->nAnzahl).'</td>';
		$request .='<tr><td>NEW_ITEM-UNIT[%d]</td><td>'.sprintf("%s",$positionArr->cEinheit).'</td>';
		$request .='<tr><td>NEW_ITEM-PRICE[%d]</td><td>'.sprintf("%.2f",$positionArr->fPreis).'</td>';
		$request .='<tr><td>NEW_ITEM-PRICEUNIT[%d]</td><td>1</td>';
		$request .='<tr><td>NEW_ITEM-CURRENCY[%d]</td><td>EUR</td>';
		$request .='<tr><td>NEW_ITEM-LEADTIME[%d]</td><td>3</td>';
		$request .='<tr><td>NEW_ITEM-LONGTEXT_%d:132[]</td><td width="70%">'. sprintf("%s",$positionArr->Artikel->cBeschreibung ).'</td>';
		$request .='<tr><td>NEW_ITEM-VENDOR[%d]</td><td>80747111</td>';
		$request .='<tr><td>NEW_ITEM-VENDORMAT[%d]</td><td>'.sprintf("%s", $positionArr->cArtNr).'</td>';
		$request .='<tr><td>NEW_ITEM-MANUFACTCODE[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-MANUFACTMAT[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-MATGROUP[%d]</td><td>40010101</td>';
		$request .='<tr><td>NEW_ITEM-SERVICE[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-CONTRACT[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-CONTRACT_ITEM[%d]</td><td></td>';		
		$request .='<tr><td>NEW_ITEM-CUST_FIELD1[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-CUST_FIELD2[%d]</td><td>6968000</td>';
		$request .='<tr><td>NEW_ITEM-CUST_FIELD3[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-CUST_FIELD4[%d]</td><td>'.$_POST['NEW_ITEM-CUST_FIELD4'][1].'</td>';
		$request .='<tr><td>NEW_ITEM-CUST_FIELD5[%d]</td><td></td>';
		$request .='<tr><td>NEW_ITEM-EXT_PRODUCT_ID[%d]</td><td></td>';
//		$request .=  sprintf( '<input type="hidden" name="NEW_ITEM-DESCRIPTION[%d]" value="%s" />'."\r\n", $i, $positionArr->cName['ger'] );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-MATNR[%d]" value="" />'."\r\n", $i );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-QUANTITY[%d]" value="%.3f" />'."\r\n", $i, $positionArr->nAnzahl );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-UNIT[%d]" value="%s" />'."\r\n", $i, $positionArr->cEinheit );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-PRICE[%d]" value="%.3f" />'."\r\n", $i, $positionArr->fPreis );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-PRICEUNIT[%d]" value="1.0" />'."\r\n", $i );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-LEADTIME[%d]" value="0" />'."\r\n", $i );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-LONGTEXT_%d:132[]" value="%s" />'."\r\n", $i, htmlspecialchars( $positionArr->Artikel->cBeschreibung ) );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-VENDOR[%d]" value="1111111" />'."\r\n", $i );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-VENDORMAT[%d]" value="" />'."\r\n", $i, $positionArr->cArtNr );
//		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-MANUFACTCODE[%d]" value="" />'."\r\n", $i );
/*		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-CURRENCY[%d]" value="EUR" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD1[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD3[%d]" value="EXT" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD4[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD5[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-EXT_PRODUCT_ID[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-EXT_CATEGORY_ID[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-SERVICE[%d]" value="" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-EXT_SCHEMA_TYPE[%d]" value="U135" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-MATGROUP[%d]" value="60105416" />'."\r\n", $i );
		$request .= sprintf( '<input type="hidden" name="NEW_ITEM-MANUFACTMAT[%d]" value="" />'."\r\n", $i );*/
		$request .='</tr>';
		$request .='</table><div></div>';
		//$request .= '---------------------------------------------------------------------------------------------'."\r\n";
		//$cart->insertInDB();
	}
}

//To Do
//Daten ins Sap Übertragen


loescheAlleSpezialPos();
Shop::Smarty()->assign('header', utf8_decode($header));
Shop::Smarty()->assign('request', $request);

//Warenkorb leeren .......