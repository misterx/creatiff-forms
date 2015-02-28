<?php
namespace Creatiff\Forms\UI;
use Creatiff\Forms\Cast;
use Creatiff\Forms\Control;

class Button extends Control{


	/**
	 * @var string
	 */
	private $text = '';

	/**
	 * Javascript code
	 * @var string
	 */
	private $handler = '';

	/**
	 * @param string $text
	 */
	public function setText($text)
	{
		$this->text = Cast::string($text);
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $handler
	 */
	public function setHandler($handler)
	{
		$this->handler = $handler;
	}

	/**
	 * @return string
	 */
	public function getHandler()
	{
		return $this->handler;
	}



}