<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Property;

class Form extends Panel{

	const METHOD_POST = 'post';
	const METHOD_GET = 'get';
	/**
	 * @var string
	 */
	private $method = self::METHOD_GET;

	/**
	 * @param string $method
	 */
	public function setMethod($method)
	{
		$this->method = Cast::enum($method,array(self::METHOD_GET, self::METHOD_POST),$default = self::METHOD_GET);
	}

	/**
	 * @return string
	 */
	public function getMethod()
	{
		return $this->method;
	}





}