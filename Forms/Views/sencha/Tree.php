<?php
/** @var Creatiff\Forms\UI\Tree $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.tree.Panel', {
	//Form params
	bodyPadding: 10,
	//Panel
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	title: <?=renderPropertyValue($component,$this,'title');?>,
	layout: <?=renderPropertyValue($component,$this,'layout');?>,
	width: <?=renderPropertyValue($component,$this,'width');?>,
	height: <?=renderPropertyValue($component,$this,'height');?>,
	frame: <?=renderPropertyValue($component,$this,'frame');?>,
	dockedItems: <?=renderPropertyValue($component,$this,'toolbars');?>,
	store:  <?=renderPropertyValue($component,$this,'store');?>,
	listeners: <?=renderListeners($component,$this);?>,
	region: <?=renderPropertyValue($component,$this,'region');?>,
	items: [
	<?= render_children($component,$this);?>
	]
})