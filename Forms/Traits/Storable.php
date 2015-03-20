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
	 * Initial component data
	 * @var array
	 */
	private $data = array();

	/**
	 * @param $store
	 * @throws \Creatiff\Forms\Exception\Component
	 */
	public function setStore(Store $store)
	{
		$this->store = $store;
	}

	/**
	 * @return \Creatiff\Forms\UI\Store|string
	 */
	public function getStore()
	{
		if(!$this->store){
			$this->setStore($this->defaultStore());
		}
		return $this->store;
	}

	/**
	 * @param array $data
	 */
	public function setData($data)
	{
		if(is_string($data)){
			$data = json_decode($data,true);
		}

		if(!is_array($data)){
			throw new Exception('Wrong data in store');
		}

		$this->getStore()->data = $data;
	}

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->getStore()->data;
	}

	/**
	 * @return Store
	 */
	protected function defaultStore(){
		return new Store();
	}
}