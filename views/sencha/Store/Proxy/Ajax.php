<?php
/** @var Creatiff\Forms\UI\Store\Proxy\Ajax $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../../_helpers.php";
?>
Ext.create('Ext.data.proxy.Ajax', {
	url: <?=renderPropertyValue($component,$this,'url');?>,
})