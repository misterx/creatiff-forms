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
				success: <?=renderPropertyCode($component,$this,'handler');?>,
				failure: function(form, action) {
					form.markInvalid(action.result.errors);
				}
			});
		}
	}
})