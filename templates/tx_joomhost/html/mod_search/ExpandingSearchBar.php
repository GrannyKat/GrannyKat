<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');


$document = JFactory::getDocument();
$AcTemplate = JFactory::getApplication()->getTemplate();
$document->addStyleSheet( JURI::base(true).'/templates/'.$AcTemplate. '/css/search-component.css');
$document->addStyleSheet( JURI::base(true).'/templates/'.$AcTemplate. '/css/search-default.css');
// $document->addScript( JURI::base(true).'/templates/'.$AcTemplate. '/js/modernizr.custom.js');
$document->addScript( JURI::base(true).'/templates/'.$AcTemplate. '/js/search-classie.js');
$document->addScript( JURI::base(true).'/templates/'.$AcTemplate. '/js/search-uisearch.js');

?>
<div id="sb-search" class="sb-search expanding-search">
	<form action="<?php echo JRoute::_('index.php'); ?>" method="post">

		<input class="sb-search-input" placeholder="<?php echo $text?>" type="text" value="" name="searchword" id="mod-search-searchword">
		<input class="sb-search-submit" type="submit" value="">
		<span class="sb-icon-search"></span>

		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
	</form>
</div>


<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
