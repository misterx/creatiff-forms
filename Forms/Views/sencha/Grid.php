<?php
/** @var Creatiff\Forms\UI\Grid $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.grid.Panel', {
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
	sortableColumns:  <?=renderPropertyValue($component,$this,'sortable');?>,
	hideHeaders:  <?=renderPropertyValue($component,$this,'hideHeaders');?>,
	columns: [
		<?= render_children($component,$this);?>
	]


})