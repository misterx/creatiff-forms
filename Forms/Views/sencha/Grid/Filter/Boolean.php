<?php
/** @var Creatiff\Forms\UI\Grid\Filter\String $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../../_helpers.php";
?>
{
	type: 'boolean',
	yesText: <?=renderPropertyValue($component,$this,'yesText');?>,
	noText: <?=renderPropertyValue($component,$this,'noText');?>,
}