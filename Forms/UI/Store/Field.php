<?php
namespace Creatiff\Forms\UI\Store;

use Creatiff\Forms\Component;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Property;
use Creatiff\Forms\UI\Store;

abstract class Field extends Component{

	protected function declareProperties()
	{
		return array(
			'name' => Property::factory('String'),
		);
	}

	protected function validateContainer(Component $component)
	{
		parent::validateContainer($component);
		if(!($component instanceof Store)){
			throw new Exception('":field" is store field, and can be used only in Store',array(':field'=>get_class($this)));
		}
	}

	protected function validateInsert(Component $component)
	{
		parent::validateInsert($component);
		throw new Exception(':component is not container',array(':component'=>get_class($this)));
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

}