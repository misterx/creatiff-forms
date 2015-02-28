<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Control;

class Html extends Control{

	/**
	 * HTML content
	 * @var string
	 */
	private $html = '';

	/**
	 * @param string $html
	 */
	public function setHtml($html)
	{
		$this->html = Cast::string($html);
	}

	/**
	 * @return string
	 */
	public function getHtml()
	{
		return $this->html;
	}



}