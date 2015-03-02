<?php
/** @var Creatiff\Forms\UI\Button $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
?>
Ext.create('Ext.Button', {
	text: <?=renderPropertyValue($component,$this,'text');?>,
	handler: function() {
		var form = this.up('form').getForm();
		if (form.isValid()) {
			form.submit({
				url: <?=renderPropertyValue($component,$this,'url');?>,
				success: function(form, action) {
					Ext.Msg.alert('Success', action.result.msg);
				},
				failure: function(form, action) {
					//http://www.sencha.com/forum/showthread.php?152075-Server-Validation-with-JSON-Response
					form.markInvalid(action.result.errors);
				}
			});
		}
	}
})