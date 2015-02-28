<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Control;
use Creatiff\Forms\Exception\Component as Exception;

abstract class Field extends Control implements FieldInterface{

	/**
	 * Field name
	 * @var string
	 */
	private $name = '';

	/**
	 * Field value
	 * @var string
	 */
	private $value = '';

	/**
	 * Field value
	 * @var string
	 */
	private $label = '';

	/**
	 * @var bool
	 */
	private $readonly = false;
	/**
	 * @var bool
	 */
	private $disabled = false;

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = Cast::string($name);
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $value
	 */
	public function setValue($value)
	{
		$this->value = Cast::string($value);
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param string $label
	 */
	public function setLabel($label)
	{
		$this->label = Cast::string($label);
	}

	/**
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}

	/**
	 * @param boolean $disabled
	 */
	public function setDisabled($disabled)
	{
		$this->disabled = Cast::bool($disabled);
	}

	/**
	 * @return boolean
	 */
	public function getDisabled()
	{
		return $this->disabled;
	}

	/**
	 * @param boolean $readonly
	 */
	public function setReadonly($readonly)
	{
		$this->readonly = Cast::bool($readonly);
	}

	/**
	 * @return boolean
	 */
	public function getReadonly()
	{
		return $this->readonly;
	}



	protected function validateInsert(\Creatiff\Forms\Component $component)
	{
		parent::validateInsert($component);
		throw new Exception(':component is not container',array(':component'=>get_class($this)));
	}



}