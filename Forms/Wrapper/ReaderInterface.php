<?php
namespace Creatiff\Forms\Wrapper;
use Creatiff\Forms\Component;

interface ReaderInterface{

	/**
	 * @param $name
	 * @return Component
	 */
	public function read($name);
}