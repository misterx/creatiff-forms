<?php
/** @var Creatiff\Forms\UI\Hidden $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.form.field.Hidden', {
	id: <?=renderPropertyValue($component,$this,'id');?>,
	value: <?=renderPropertyValue($component,$this,'value');?>,
	name: <?=renderPropertyValue($component,$this,'name');?>,
})