<?php
/** @var Creatiff\Forms\UI\Store $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once "_helpers.php";
?>
Ext.create('Ext.data.Store', {
	id: <?=renderPropertyValue($component,$this,'id');?>,
	data :	<?=renderPropertyValue($component,$this,'data');?>,
	fields: [<?= render_children($component,$this);?>],
	autoLoad: <?=renderPropertyValue($component,$this,'autoLoad');?>,
	remoteSort: <?=renderPropertyValue($component,$this,'remoteSort');?>,
	remoteFilter: <?=renderPropertyValue($component,$this,'remoteFilter');?>,
	<?php if($component->getProxy()){?>proxy : <?=renderPropertyValue($component,$this,'proxy');?>,<?php }?>
})