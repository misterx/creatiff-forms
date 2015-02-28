<?php
namespace Creatiff\Forms;
use Creatiff\Forms\Component;


abstract class Property{

	protected $default = null;

	public function __construct(array $options = array())
	{
		if ($options)
		{
			// Just throw them into the class as public variables
			foreach ($options as $name => $value)
			{
				$this->$name = $value;
			}
		}
	}

	function get(Component $component, $value){
		return $value;
	}

	function set(Component $component, $value){
		return $value;
	}

	public function default_value(){
		return $this->default;
	}

	public static function factory($type, $params = array()){
		$class_name = __NAMESPACE__."\\Property\\".$type;
		return new $class_name($params);
	}
}