<?php
namespace Creatiff\Forms\UI;
use Creatiff\Forms\Cast;

/**
 * Class Window A specialized panel intended for use as an application window.
 * @package Creatiff\Forms\UI
 */
class Window extends Panel{

	/**
	 * @var bool
	 */
	private $modal = false;
	/**
	 * @var bool
	 */
	private $closable = true;

	/**
	 * @param boolean $closable
	 */
	public function setClosable($closable)
	{
		$this->closable = Cast::bool($closable);
	}

	/**
	 * @return boolean
	 */
	public function getClosable()
	{
		return $this->closable;
	}

	/**
	 * @param boolean $modal
	 */
	public function setModal($modal)
	{
		$this->modal = Cast::bool($modal);
	}

	/**
	 * @return boolean
	 */
	public function getModal()
	{
		return $this->modal;
	}


}