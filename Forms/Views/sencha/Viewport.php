<?php
/** @var Creatiff\Forms\UI\Window $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.container.Viewport', {
	layout: 'border',
	items: [
		<?= render_children($component,$this);?>
	]
})