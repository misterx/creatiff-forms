<?php
namespace Creatiff\Forms\UI;
use Creatiff\Forms\Cast;
use Creatiff\Forms\UI\Form\Combobox;


class Event extends Combobox{


	/**
	 * @var string
	 */
	private $name = '';

	/**
	 * Javascript code
	 * @var string
	 */
	private $handler = '';

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = Cast::string($name);
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}



	/**
	 * @param string $handler
	 */
	public function setHandler($handler)
	{
		$this->handler = Cast::string($handler);
	}

	/**
	 * @return string
	 */
	public function getHandler()
	{
		return $this->handler;
	}



}