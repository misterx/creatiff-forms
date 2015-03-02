<?php
namespace Creatiff\Forms;

use Creatiff\Forms\Iterator\Filter\Attribute;
use Creatiff\Forms\Iterator\Filter\Object;

class Utils{

	public static function findById(Component $component, $id){

		$iterator = new Attribute($component,'id',$id);
		return new \RecursiveIteratorIterator($iterator);
	}

	public static function findByObject(Component $component, $class){
		$iterator = new Object($component,$class);
		return new \RecursiveIteratorIterator($iterator);
	}

	public static function findFields(Component $component, $name = null){
		$filter = new Object($component,'Creatiff\Forms\UI\Form\Field');
		if($name!==null){
			$filter = new Attribute($filter,'name',$name);
		}
		return new \RecursiveIteratorIterator($filter);
	}

	public static function getField(Component $component, $name){
		foreach(self::findFields($component, $name) as $field){
			return $field;
		}
		return null;
	}

	public static function setValues(Component $component, array $values){
		/** @var \Creatiff\Forms\UI\Form\Field $field*/
		foreach(self::findFields($component) as $field){
			if(array_key_exists($field->name, $values)){
				$field->value = $values[$field->getName()];
			}
		}
	}

	public static function getValues(Component $component){
		$values = [];
		/** @var \Creatiff\Forms\UI\Form\Field $field*/
		foreach(self::findFields($component) as $field){
			if($field->name){
				$values[$field->name] = $field->value;
			}
		}
		return $values;
	}
}