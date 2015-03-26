<?php
namespace Creatiff\Forms\UI\Grid\Filter;

use Creatiff\Forms\Cast;
use \Creatiff\Forms\UI\Grid\Filter;

class Enum extends Filter{

	/**
	 * @var bool Specify true to group all items in this list into a single-select radio button group.
	 */
	private $single = false;

	/**
	 * @var array
	 */
	private $options = array();

	/**
	 * @var null
	 */
	private $store = null;

	/**
	 * @param array $options
	 */
	public function setOptions($options)
	{
		$this->options = $options;
	}

	/**
	 * @return array
	 */
	public function getOptions()
	{
		return $this->options;
	}

	/**
	 * @param boolean $single
	 */
	public function setSingle($single)
	{
		$this->single = Cast::bool($single);
	}

	/**
	 * @return boolean
	 */
	public function getSingle()
	{
		return $this->single;
	}

	/**
	 * @param null $store
	 */
	public function setStore($store)
	{
		$this->store = $store;
	}

	/**
	 * @return null
	 */
	public function getStore()
	{
		return $this->store;
	}



}