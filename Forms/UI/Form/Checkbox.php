<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;

/**
 * Class Text
 * Single checkbox field.
 * @package Creatiff\Forms\UI
 */
class Checkbox extends Field{

	/**
	 * @var bool
	 */
	private $value=false;

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = Cast::bool($value);
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}



}