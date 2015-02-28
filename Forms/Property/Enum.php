<?php
namespace Creatiff\Forms\Property;

use Creatiff\Forms\Component;
use Creatiff\Forms\Property;
use Creatiff\Forms\Exception\Property as Exception;


class Enum extends Property{

	protected $default = '';
	protected $choices = array();

	public function __construct(array $options = array())
	{
		parent::__construct($options);
		if(!in_array($this->default,$this->choices)){
			throw new Exception('Default value must be one of ['.implode(',',$this->choices).']');
		}

	}


	function set(Component $component, $value)
	{
		if(!in_array($value,$this->choices)){
			throw new Exception('Must be one of ['.implode(',',$this->choices).']');
		}
		return $value;
	}
}
