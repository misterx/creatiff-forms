<?php
/** @var Creatiff\Forms\UI\Panel $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.panel.Panel', {
	//Panel
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	title: <?=renderPropertyValue($component,$this,'title');?>,
	layout: <?=renderPropertyValue($component,$this,'layout');?>,
	width: <?=renderPropertyValue($component,$this,'width');?>,
	height: <?=renderPropertyValue($component,$this,'height');?>,
	frame: <?=renderPropertyValue($component,$this,'frame');?>,
	dockedItems: <?=renderPropertyValue($component,$this,'toolbars');?>,
	region: <?=renderPropertyValue($component,$this,'region');?>,
	items: [
		<?= render_children($component,$this);?>
	],
	listeners: <?=renderListeners($component,$this);?>

})