<?php
namespace Creatiff\Forms\Property;
use Creatiff\Forms\Property;
use Creatiff\Forms\Component;

class Float extends Property{

	protected $default = 0;

	function get(Component $component, $value)
	{
		return (float)$value;
	}

	function set(Component $component, $value)
	{
		return (float)$value;
	}
}
