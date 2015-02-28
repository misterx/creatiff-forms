<?php
namespace Creatiff\Forms\Property;
use Creatiff\Forms\Property;
use Creatiff\Forms\Component;

class Arr extends Property{

	protected $default = array();

	function get(Component $component, $value)
	{
		return (array)$value;
	}

	function set(Component $component, $value)
	{
		return (array)$value;
	}


}
