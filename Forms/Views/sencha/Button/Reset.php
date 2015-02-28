<?php
/** @var Creatiff\Forms\UI\Button $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.Button', {
	text: <?=renderPropertyValue($component,$this,'text');?>,
	handler: function() {
		this.up('form').getForm().reset();
	}
})