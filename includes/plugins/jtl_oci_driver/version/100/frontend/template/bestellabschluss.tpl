{**
 * @copyright (c) JTL-Software-GmbH
 * @license http://jtl-url.de/jtlshoplicense
 *}



<div id="order-confirm">
    {if $hinweis}
       <p class="alert alert-danger">{$hinweis}</p>
    {/if}

    {if !empty($smarty.get.mailBlocked)}
        <p class="alert alert-danger">{lang key="kwkEmailblocked" section="errorMessages"}</p>
    {/if}

    {if !empty($smarty.get.fillOut)}
       <p class="alert alert-danger">{lang key="fillOutQuestion" section="messages"}</p>
    {/if}

 <form method="post" name="agbform" id="complete_order" action="{$OCIAction}">
    <div class="row row-eq-height">
     
            <div class="col-md-6">
                <div class="panel panel-info" id="panel-edit-comment">
                    <div class="panel-heading ">
                        <h3 class="panel-title">Bitte tragen Sie Ihre 7-stellig. Personalnummer ein:</h3>
                    </div>
                    <div class="panel-body">
						<input class="form-control" type="text" name="NEW_ITEM-CUST_FIELD4[1]" maxlength="7" required />
                    </div>
                </div>
            </div>
    
    </div>{* /row *}

    {if isset($safetypay_form)}
        <div class="alert alert-info">{$safetypay_form}</div>
    {/if}
   
        {$jtl_token}
        {if $Einstellungen.kaufabwicklung.bestellvorgang_wrb_anzeigen == 1}
            {lang key="cancellationPolicyNotice" section="checkout" assign="cancellationPolicyNotice"}
            {lang key="wrb" section="checkout" assign="wrb"}
            {if isset($AGB->kLinkWRB) && $AGB->kLinkWRB > 0}
                {assign var='linkWRB' value='<a href="navi.php?s='|cat:$AGB->kLinkWRB|cat:'" class="popup">'|cat:$wrb|cat:'</a>'}

                <div class="alert alert-info">{$cancellationPolicyNotice|replace:"#LINK_WRB#":$linkWRB}</div>
            {elseif !empty($AGB->cWRBContentHtml)}
                {block name="checkout-confirmation-modal-agb-html"}
                {assign var='linkWRB' value='<a href="#" data-toggle="modal" data-target="#wrbHtmlModal" class="modal-popup" id="wrb">'|cat:$wrb|cat:'</a>'}
                <div class="alert alert-info">{$cancellationPolicyNotice|replace:'#LINK_WRB#':$linkWRB}</div>
                <div class="modal fade" id="wrbHtmlModal" tabindex="-1" role="dialog" aria-labelledby="wrbHtmlLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="wrbHtmlLabel">{lang key="wrb" section="checkout"}</h4>
                            </div>
                            <div class="modal-body">
                                {$AGB->cWRBContentHtml}
                            </div>
                        </div>
                    </div>
                </div>
                {/block}
            {elseif !empty($AGB->cWRBContentText)}
                {block name="checkout-confirmation-modal-agb-text"}
                {assign var='linkWRB' value='<a href="#" data-toggle="modal" data-target="#wrbTextModal" class="modal-popup" id="wrb">'|cat:$wrb|cat:'</a>'}
                <div class="alert alert-info">{$cancellationPolicyNotice|replace:'#LINK_WRB#':$linkWRB}</div>
                <div class="modal fade" id="wrbTextModal" tabindex="-1" role="dialog" aria-labelledby="wrbTextLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="wrbTextLabel">{lang key="wrb" section="checkout"}</h4>
                            </div>
                            <div class="modal-body">
                                {$AGB->cWRBContentText}
                            </div>
                        </div>
                    </div>
                </div>
                {/block}
            {/if}
        {/if}
        {if !isset($smarty.session.cPlausi_arr)}
            {assign var=plausiArr value=array()}
        {else}
            {assign var=plausiArr value=$smarty.session.cPlausi_arr}
        {/if}

        {hasCheckBoxForLocation bReturn="bCheckBox" nAnzeigeOrt=$nAnzeigeOrt cPlausi_arr=$plausiArr cPost_arr=$cPost_arr}
        {if $bCheckBox}
            <hr>
            {include file='snippets/checkbox.tpl' nAnzeigeOrt=$nAnzeigeOrt cPlausi_arr=$plausiArr cPost_arr=$cPost_arr}
            <hr>
        {/if}
        <div class="row">
            <div class="col-xs-12 order-submit">
                {block name="checkout-confirmation-confirm-order"}
                <div class="panel-wrap basket-well basket-final">
                    <div class="panel panel-primary" id="panel-submit-order">
                        <div class="panel-body">
                            <input type="hidden" name="abschluss" value="1" />
                            <input type="hidden" id="comment-hidden" name="kommentar" value="" />
                            {include file="checkout/inc_order_items.tpl" tplscope="confirmation"}
                           {$html}
                        </div>
                    </div>
                </div>
                {/block}
            </div>
        </div>{* /row *}
    </form>
</div>

