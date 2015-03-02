<?php
/** @var Creatiff\Forms\UI\Text $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.form.field.Display', {
	componentCls: <?=renderPropertyValue($component,$this,'class');?>,
	id: <?=renderPropertyValue($component,$this,'id');?>,
	fieldLabel: <?=renderPropertyValue($component,$this,'label');?>,
	value: <?=renderPropertyValue($component,$this,'value');?>,
	msgTarget: 'side',
	name: <?=renderPropertyValue($component,$this,'name');?>,
	disabled: <?=renderPropertyValue($component,$this,'disabled');?>
})