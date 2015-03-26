<?php
/** @var Creatiff\Forms\UI\Grid\Filter\Enum $component */
/** @var Creatiff\Forms\Wrapper\RenderHtml $this */
include_once dirname(__FILE__)."../../../_helpers.php";
$options = [];
foreach($component->getOptions() as $k=>$v){
	$options[] = [$k,$v];
}
?>
{
	type: 'list',
	options: <?=json_encode($options)?>,
	single: <?=renderPropertyValue($component,$this,'single');?>,
}