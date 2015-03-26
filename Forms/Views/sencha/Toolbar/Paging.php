<?php
/** @var Creatiff\Forms\UI\Toolbar $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
//	store: <?=renderPropertyValue($component,$this,'store');
include_once dirname(__FILE__)."../../_helpers.php";
?>
Ext.create('Ext.toolbar.Paging', {
	dock: <?=renderPropertyValue($component,$this,'dock');?>,
	store: <?=renderPropertyValue($component,$this,'store');?>,
	items: [<?=render_children($component,$this)?>]
})