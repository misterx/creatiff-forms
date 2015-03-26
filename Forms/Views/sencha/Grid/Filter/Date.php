<?php
/** @var Creatiff\Forms\UI\Grid\Filter\String $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../../_helpers.php";
?>
{
	type: 'date',
	dateFormat: <?=renderPropertyValue($component,$this,'format');?>,
	minDate: <?=renderPropertyValue($component,$this,'min');?>,
	maxDate: <?=renderPropertyValue($component,$this,'max');?>,
}