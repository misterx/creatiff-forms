<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Property;

/**
 * Class Text
 * A numeric text field that provides automatic keystroke filtering to disallow non-numeric characters
 * @package Creatiff\Forms\UI
 */
class Number extends Field{

	/**
	 * @var int
	 */
	private $value=0;

	/**
	 * @param int $value
	 */
	public function setValue($value)
	{
		$this->value = Cast::int($value);
	}

	/**
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
	}


}