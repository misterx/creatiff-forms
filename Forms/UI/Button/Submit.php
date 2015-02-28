<?php
namespace Creatiff\Forms\UI\Button;
use Creatiff\Forms\Cast;
use Creatiff\Forms\UI\Button;

class Submit extends Button{

	const SUBMIT_AJAX = 'ajax';
	const SUBMIT_NORMAL = 'normal';

	/**
	 * @var string
	 */
	private $url = '';

	/**
	 * @var string
	 */
	private $type = self::SUBMIT_NORMAL;

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

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = Cast::enum($type,[self::SUBMIT_NORMAL, self::SUBMIT_AJAX],self::SUBMIT_NORMAL);
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}




}