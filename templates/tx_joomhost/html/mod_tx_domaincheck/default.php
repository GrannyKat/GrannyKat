<?php
/**
 * @package     Joomla.Site
 * @subpackage  Tx_DomainChecker
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('script', Juri::base() . 'modules/mod_tx_domaincheck/ajax.js', array('version' => 'auto', 'relative' => true));
?>

<?php if ($pretext != "") { ?>
<div style="margin-bottom:8px; display: none;">
    <?php echo $pretext ?>
</div>
<?php } ?>

<div id="main" class="tx-domain-search-">
    <form action="" method="post" name="tx_domaincheck" class="tx_domaincheck form-inline">
        <span style="font-weight:bold;display: none;">
            <?php echo $label ?> :
        </span>
        <div style="margin-top:8px; margin-bottom:8px" class="form-group search-field">
            <input class="text form-control" name="domainname" type="text" placeholder="Find your perfect domain name"/>
            <a href="javascript:void(0);" id="clearSearchDomainCheck" class="icon-clear"><i class="fa fa-close"></i></a>
            <div id="domainCheckResult" class="search-result" style="display:none"></div>
        </div>
        <div style="margin-top:8px; margin-bottom:8px; display: none">
            <div style="margin-bottom:8px">
                <input type="checkbox" name="all" checked="checked"/> <?php echo $checkall ?>
            </div>
            <input type="checkbox" name="com"/> .com
            <input type="checkbox" name="net"/> .net
            <input type="checkbox" name="org"/> .org
            <input type="checkbox" name="info"/> .info
        </div>

        <button class="button btn btn-primary search-btn submit" type="submit" name="submitBtn" value=""><?php echo $buttontext ?></button>

        <input type="hidden" name="option" value="com_ajax" />
        <input type="hidden" name="module" value="tx_domaincheck" />
        <input type="hidden" name="format" value="raw" />
        <?php echo JHtml::_('form.token'); ?>

    </form>
    <!-- <div id="domainCheckResult"></div> -->
</div>
