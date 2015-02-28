<?php
/** @var Creatiff\Forms\UI\Toolbar $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../_helpers.php";
?>
Ext.create('Ext.toolbar.Paging', {
	dock: <?=renderProperty($component,'dock')?>,
	store: <?=renderProperty($component,'store')?>,
	items: [<?=render_children($component,$this)?>]

})