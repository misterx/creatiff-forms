<?php
namespace Creatiff\Forms\UI\Toolbar;

use Creatiff\Forms\Component;
use Creatiff\Forms\Property;
use Creatiff\Forms\UI\Toolbar;

class Paging extends Toolbar{

	public function __construct(Component $owner = null)
	{
		parent::__construct($owner); // TODO: Change the autogenerated stub
		$this->dock = self::DOCK_BOTTOM;
	}

	protected function declareProperties()
	{
		return parent::declareProperties() + array(
			'store' => Property::factory('String')
		);
	}


}