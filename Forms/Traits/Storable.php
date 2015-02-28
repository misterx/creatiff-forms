<?php
namespace Creatiff\Forms\Traits;

use Creatiff\Forms\UI\Store;
use Creatiff\Forms\Exception\Component as Exception;

trait Storable {
	/**
	 * @var string| Store
	 */
	private $store = null;

	/**
	 * @param $store
	 * @throws \Creatiff\Forms\Exception\Component
	 */
	public function setStore($store)
	{
		if(!($store instanceof Store) and !is_string($store)){
			throw new Exception('Store must be id or object');
		}
		$this->store = $store;
	}

	/**
	 * @return \Creatiff\Forms\UI\Store|string
	 */
	public function getStore()
	{
		return $this->store;
	}
}