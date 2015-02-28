<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Property;
use Creatiff\Forms\Traits\Storable;

/**
 * Class Combobox
 * A combobox control with support for autocomplete, remote loading, and many other features.
 * @package Creatiff\Forms\UI
 */
class Combobox extends Field{
	use Storable;

	/**
	 * @var string
	 */
	private $displayField = '';

	/**
	 * @var string
	 */
	private $valueField = '';

	/**
	 * @param string $displayField
	 */
	public function setDisplayField($displayField)
	{
		$this->displayField = Cast::string($displayField);
	}

	/**
	 * @return string
	 */
	public function getDisplayField()
	{
		return $this->displayField;
	}

	/**
	 * @param string $valueField
	 */
	public function setValueField($valueField)
	{
		$this->valueField = Cast::string($valueField);
	}

	/**
	 * @return string
	 */
	public function getValueField()
	{
		return $this->valueField;
	}


}