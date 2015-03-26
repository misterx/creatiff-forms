<?php
namespace Creatiff\Forms\UI\Toolbar;

use Creatiff\Forms\Cast;
use Creatiff\Forms\UI\Toolbar;

class Paging extends Toolbar{

	private $store;

	/**
	 * @param mixed $store
	 */
	public function setStore($store)
	{
		$this->store = Cast::string($store);
	}

	/**
	 * @return mixed
	 */
	public function getStore()
	{
		return $this->store;
	}



}