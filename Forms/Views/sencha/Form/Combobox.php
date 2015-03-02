<?php
/** @var Creatiff\Forms\UI\Form\Combobox $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.form.field.ComboBox', {
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	fieldLabel: <?=renderPropertyValue($component,$this,'label');?>,
	store:  <?=renderPropertyValue($component,$this,'store');?>,
	displayField: <?=renderPropertyValue($component,$this,'displayField');?>,
	valueField: <?=renderPropertyValue($component,$this,'valueField');?>,
	name: <?=renderPropertyValue($component,$this,'name');?>,
	value: <?=renderPropertyValue($component,$this,'value');?>,
	msgTarget: 'side',
	disabled: <?=renderPropertyValue($component,$this,'disabled');?>,
	readOnly: <?=renderPropertyValue($component,$this,'readonly');?>
})