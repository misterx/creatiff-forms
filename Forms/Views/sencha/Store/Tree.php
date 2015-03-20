<?php
/** @var Creatiff\Forms\UI\Store $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../_helpers.php";
?>
Ext.create('Ext.data.TreeStore', {
	id: <?=renderPropertyValue($component,$this,'id');?>,
	data :	<?=renderPropertyValue($component,$this,'data');?>,
	fields: [<?= render_children($component,$this);?>],
	autoLoad: <?=renderPropertyValue($component,$this,'autoLoad');?>,
	remoteSort: <?=renderPropertyValue($component,$this,'remoteSort');?>,
	<?php if($component->getProxy()){?>proxy : <?=renderPropertyValue($component,$this,'proxy');?>,<?php }?>
})