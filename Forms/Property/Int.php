<?php
namespace Creatiff\Forms\Property;
use Creatiff\Forms\Property;
use Creatiff\Forms\Component;

class Int extends Property{

	protected $default = 0;

	function get(Component $component, $value)
	{
		return (int)$value;
	}

	function set(Component $component, $value)
	{
		return (int)$value;
	}


}
