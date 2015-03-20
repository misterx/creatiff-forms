<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Property;
use Creatiff\Forms\Traits\Storable;
use Creatiff\Forms\UI\Store;

/**
 * Class Combobox
 * A combobox control with support for autocomplete, remote loading, and many other features.
 * @package Creatiff\Forms\UI
 */
class Combobox extends Field{
	use Storable {
		defaultStore as storableDefaultStore;
	}

	/**
	 * @var string
	 */
	private $displayField = 'name';

	/**
	 * @var string
	 */
	private $valueField = 'id';

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

	protected function defaultStore()
	{
		$store = $this->storableDefaultStore();
		$valueField = new Store\Field\String($store);
		$valueField->name = $this->valueField;
		$displayField = new Store\Field\String($store);
		$displayField->name = $this->displayField;
		return $store;
	}


}