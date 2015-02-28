<?php
/** @var Creatiff\Forms\UI\Text $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.form.field.Text', {
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	fieldLabel: <?=renderPropertyValue($component,$this,'label');?>,
	value: <?=renderPropertyValue($component,$this,'value');?>,
	name: <?=renderPropertyValue($component,$this,'name');?>,
	disabled: <?=renderPropertyValue($component,$this,'disabled');?>,
	readOnly: <?=renderPropertyValue($component,$this,'readonly');?>,
})