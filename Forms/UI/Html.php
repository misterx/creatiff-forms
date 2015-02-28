<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Component;
use Creatiff\Forms\Control;
use Creatiff\Forms\Property;

class Html extends Control{

	protected function declareProperties()
	{
		return array(
			'html' => Property::factory('String'),
		);
	}

}