<?php
namespace Creatiff\Forms\Property;

use Creatiff\Forms\Property;
use Creatiff\Forms\Component;

class Mixed extends Property{

	/** @var string */
	protected $set = null;
	/** @var string */
	protected $get = null;

	function get(Component $component, $value)
	{
		if(!$this->get){
			return $value;
		}

		$class = new \ReflectionClass($component);
		$method = $class->getMethod($this->get);
		$method->setAccessible(true);
		return $method->invoke($component,$value);

	}

	function set(Component $component, $value)
	{
		if(!$this->set){
			return $value;
		}

		$class = new \ReflectionClass($component);
		$method = $class->getMethod($this->set);
		$method->setAccessible(true);
		return $method->invoke($component,$value);

	}
}
