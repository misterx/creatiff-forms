<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Traits\Storable;


/**
 * Class Grid
 * @package Creatiff\Forms\UI
 */
class Grid extends Panel{
	use Storable;

	/**
	 * @var bool
	 */
	private $sortable = true;

	/**
	 * @var bool
	 */
	private $hideHeaders = false;

	/**
	 * @param boolean $sortable
	 */
	public function setSortable($sortable)
	{
		$this->sortable = Cast::bool($sortable);
	}

	/**
	 * @return boolean
	 */
	public function getSortable()
	{
		return $this->sortable;
	}

	/**
	 * @param boolean $hideHeaders
	 */
	public function setHideHeaders($hideHeaders)
	{
		$this->hideHeaders = Cast::bool($hideHeaders);
	}

	/**
	 * @return boolean
	 */
	public function getHideHeaders()
	{
		return $this->hideHeaders;
	}




}