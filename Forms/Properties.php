<?php
namespace Creatiff\Forms;

use Creatiff\Forms\Exception\Properties as Exception;

class Properties{

	private static $_properties = array();

	protected static function key(Component $component){
		return get_class($component);
	}

	/**
	 * @param Component $parent
	 * @return $this
	 * @throws Exception\Properties
	 */
	public static function instance(Component $parent){
		if(!self::initialized($parent)){
			throw new Exception('Unable to find properties for class '.get_class($parent));
		}
		return self::$_properties[self::key($parent)];
	}

	public static function initialized(Component $parent){
		return array_key_exists(self::key($parent),self::$_properties);
	}

	public static function initialize(Component $parent, array $fields = array()){
		return self::$_properties[self::key($parent)]=new Properties($fields);
	}

	/** @var Property[] */
	protected $properties = array();
	/** @var array  */
	protected $defaults = array();

	private function __construct(array $properties)
	{
		foreach($properties as $name=>$value){
			if(!($value instanceof Property)) continue;
			$this->properties[$name] = $value;
			$this->defaults[$name] = $value->default_value();
		}
	}

	/**
	 * @return Property[]
	 */
	public function meta(){
		return $this->properties;
	}

	public function defaults(){
		return $this->defaults;
	}

	public function get(Component $component, $name,$value){
		return $this->validateProperty($component,$name)->get($component,$value);
	}


	public function set($component, $name,$value){
		return $this->validateProperty($component, $name)->set($component,$value);
	}

	/**
	 * @param $name
	 * @return Property
	 * @throws Exception\Properties
	 */
	public function validateProperty(Component $component, $name){
		if(!array_key_exists($name,$this->properties)){
			throw new Exception('Unable to find property ":property" for :class',array(':property'=>$name,':class'=>get_class($component)));
		}else{
			return $this->properties[$name];
		}
	}

	public function hasProperty($propertyName){
		return array_key_exists($propertyName,$this->properties);
	}

	public function getPropertyClass($propertyName){
		if($this->hasProperty($propertyName)){
			return $this->properties[$propertyName];
		}
	}

}