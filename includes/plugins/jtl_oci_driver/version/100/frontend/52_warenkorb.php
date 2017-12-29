<?php
Shop::Smarty()->assign( 'oci', false );
if ( isset($_SESSION['OCI']) ) {
	require_once PFAD_ROOT . PFAD_INCLUDES . 'bestellvorgang_inc.php';
	require_once PFAD_ROOT . PFAD_INCLUDES . 'warenkorb_inc.php';

	global $smarty, $cart;
	Shop::Smarty()->assign( 'oci', true );
	Shop::Smarty()->assign( 'oci_checkoutOpenCI', $oPlugin->oPluginSprachvariableAssoc_arr["oci_checkoutOpenCI"] );

	$hookUrl = '';
	if ( isset( $_SESSION['HOOK_URL'] ) ) {
		$html = '<form id="buy_form" method="post" action="' . $_SESSION['HOOK_URL'] . '" >';
	} else {
		$html = '<form id="buy_form" method="post" action="shop2/oci" >';
	}

//var_dump($cart);
//var_dump($_SESSION);
	if ( count( $cart->PositionenArr ) > 0 ) {
		$i = 0;
		foreach ( $cart->PositionenArr as $positionArr ) {
		//print '<pre>';
		//var_dump($positionArr->Artikel->cArtNr);
		//print '</pre>';
			$i ++;
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-DESCRIPTION[%d]" value="%s" />', $i, $positionArr->cName['ger'] );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-MATNR[%d]" value="" />', $i );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-QUANTITY[%d]" value="%.3f" />', $i, $positionArr->nAnzahl );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-UNIT[%d]" value="%s" />', $i, $positionArr->cEinheit );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-PRICE[%d]" value="%.2f" />', $i, $positionArr->fPreis );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-PRICEUNIT[%d]" value="%d" />', $i , 1);
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CURRENCY[%d]" value="%s" />', $i, 'EUR' );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-LEADTIME[%d]" value="%d" />', $i, 3 );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-LONGTEXT_%d:132[]" value="%s" />', $i, $positionArr->Artikel->cBeschreibung );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-VENDOR[%d]" value="%d" />', $i, 80747111 );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-VENDORMAT[%d]" value="%s" />', $i, $positionArr->Artikel->cArtNr);
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-MANUFACTCODE[%d]" value="" />', $i );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-MANUFACTMAT[%d]" value="" />', $i );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-MATGROUP[%d]" value="%d" />', $i, 40010101);
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-SERVICE[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CONTRACT[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CONTRACT_ITEM[%d]" value="" />', $i );
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD1[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD2[%d]" value="%d" />', $i, 6968000);	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD3[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD4[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-CUST_FIELD5[%d]" value="" />', $i );	
			$html .= sprintf( '<input type="hidden" name="NEW_ITEM-EXT_PRODUCT_ID[%d]" value="" />', $i );
			if (isset( $_SESSION['HOOK_URL'] ) ) {
				//loescheWarenkorbPosition( $i );
			}
		}
	}

	if ( isset( $_SESSION['HOOK_URL'] ) ) {
		$html .= '<input type="submit" name="absenden" class="submit btn btn-primary btn-lg pull-right" value="' . $oPlugin->oPluginSprachvariableAssoc_arr['oci_checkoutOpenCI'] . '" /></form>';
	} else {
		$html .= '<input type="submit" name="absenden" class="submit btn btn-primary btn-lg pull-right" value="' . $oPlugin->oPluginSprachvariableAssoc_arr['oci_checkoutOpenCI'] . '" /></form>';
	}
	Shop::Smarty()->assign( 'html', $html );


}

