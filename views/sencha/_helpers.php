<?php
function render_children(Creatiff\Forms\Component $component, \Creatiff\Forms\Wrapper\RenderHtml $render){
	$childHtml = array();
	foreach($component->getComponents() as $child){
		$childHtml[] = $render->render($child);
	}
	return implode(',', (array)$childHtml);
}

function renderPropertyValue(Creatiff\Forms\Component $component, \Creatiff\Forms\Wrapper\RenderHtml $render, $property, $prefix='',$postfix=''){
	$value = $component->{$property};
	switch(true){
		case is_null($value): return 'null'; break;
		case is_array($value): return json_encode($value); break;
		case is_string($value): return "'".addslashes(trim($prefix.$value.$postfix))."'"; break;
		case is_bool($value): return $value?'true':'false'; break;
		case ($value instanceof \Creatiff\Forms\Component): return $render->render($value); break;
		case is_float($value):
		case is_int($value):
		default: return $value; break;

	}
}
function renderListeners(Creatiff\Forms\Component $component, \Creatiff\Forms\Wrapper\RenderHtml $render){
	/** @var Creatiff\Forms\UI\Event[] $listeners */
	$listeners = $component->getListeners();
	$listeners_array = array();
	foreach($listeners as $listener){
		$listeners_array[] = $render->render($listener);
	}
	if(!$listeners_array){
		return 'null';
	}else{
		return '{'.implode(',',$listeners_array).'}';
	}
}

function renderPropertyCode(Creatiff\Forms\Component $component, \Creatiff\Forms\Wrapper\RenderHtml $render, $property){
	$code = rtrim($value = $component->{$property},',;');
	if(!$code){
		return 'null';
	}else{
		return $code;
	}
}

