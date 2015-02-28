<?php
/** @var Creatiff\Forms\UI\Toolbar $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.toolbar.Toolbar', {
	items: [<?=render_children($component,$this)?>],
	dock: <?=renderPropertyValue($component,$this,'dock');?>,
})