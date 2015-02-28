<?php
namespace Creatiff\Forms\UI\Store\Proxy;

use Creatiff\Forms\Cast;
use Creatiff\Forms\UI\Store\Proxy;
use Creatiff\Forms\Property;

class Ajax extends Proxy{

	/**
	 * @var string
	 */
	private $url = '';

	/**
	 * @param string $url
	 */
	public function setUrl($url)
	{
		$this->url = Cast::string($url);
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}


}