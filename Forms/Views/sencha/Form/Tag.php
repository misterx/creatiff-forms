<?php
/** @var Creatiff\Forms\UI\Combobox $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.form.field.Tag', {
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	fieldLabel: <?=renderPropertyValue($component,$this,'label');?>,
	store:  <?=renderPropertyValue($component,$this,'store');?>,
	displayField: <?=renderPropertyValue($component,$this,'displayField');?>,
	valueField: <?=renderPropertyValue($component,$this,'valueField');?>,
	name: <?=renderPropertyValue($component,$this,'name');?>,
	value: <?=renderPropertyValue($component,$this,'value');?>,
	disabled: <?=renderPropertyValue($component,$this,'disabled');?>,
	msgTarget: 'side',
	readOnly: <?=renderPropertyValue($component,$this,'readonly');?>
})