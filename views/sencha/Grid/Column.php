<?php
/** @var Creatiff\Forms\UI\Grid\Column $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../_helpers.php";
?>
Ext.create('Ext.grid.column.Column', {
	id: <?=renderPropertyValue($component,$this,'id');?>,
	text: <?=renderPropertyValue($component,$this,'title');?>,
	width: <?=renderPropertyValue($component,$this,'width');?>,
	dataIndex: <?=renderPropertyValue($component,$this,'name');?>,
	sortable: <?=renderPropertyValue($component,$this,'sortable');?>,
	flex: <?=renderPropertyValue($component,$this,'flex');?>,
	hidden: <?=renderPropertyValue($component,$this,'hidden');?>,
	<?php if($component->getComponentCount()>0):?>
	columns:[<?= render_children($component,$this);?>],
	<?php endif;?>
})