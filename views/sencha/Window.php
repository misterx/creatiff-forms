<?php
/** @var Creatiff\Forms\UI\Window $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.window.Window', {
	//Panel
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	title: <?=renderPropertyValue($component,$this,'title');?>,
	layout: <?=renderPropertyValue($component,$this,'layout');?>,
	width: <?=renderPropertyValue($component,$this,'width');?>,
	height: <?=renderPropertyValue($component,$this,'height');?>,
	frame: <?=renderPropertyValue($component,$this,'frame');?>,
	dockedItems: <?=renderPropertyValue($component,$this,'toolbars');?>,
	modal: <?=renderPropertyValue($component,$this,'modal');?>,
	closable: <?=renderPropertyValue($component,$this,'closable');?>,
	closeAction: 'hide',
	items: [
	<?= render_children($component,$this);?>
	]
})