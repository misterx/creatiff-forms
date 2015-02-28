<?php
namespace Creatiff\Forms\Property;
use Creatiff\Forms\Property;
use Creatiff\Forms\Component;

class Bool extends Property{

	protected $default = false;

	function get(Component $component, $value)
	{
		return (bool)$value;
	}

	function set(Component $component, $value)
	{
		return (bool)$value;
	}


}
