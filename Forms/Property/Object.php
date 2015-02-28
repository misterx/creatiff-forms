<?php
namespace Creatiff\Forms\Property;
use Creatiff\Forms\Component;
use Creatiff\Forms\Property;
use Creatiff\Forms\Exception\Property as Exception;

class Object extends Property{


	/**
	 * If set, use strict object validation
	 * @var null
	 */
	protected $class = null;

	function set(Component $component, $value)
	{
		if(!is_object($value)){
			throw new Exception('Must be object');
		}

		if($this->class!==null and !is_a($value, $this->class)){
			throw new Exception('Must be instance of '.$this->class);
		}

		return $value;
	}

}
