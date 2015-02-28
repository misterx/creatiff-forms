<?php
namespace Creatiff\Forms\UI\Grid;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Property;
use Creatiff\Forms\Exception\Component as Exception;

class Column extends Component{

	/**
	 * @var string
	 */
	private $name = '';
	/**
	 * @var string
	 */
	private $title = '';
	/**
	 * @var string
	 */
	private $width = '';
	/**
	 * @var bool
	 */
	private $sortable = true;
	/**
	 * @var int
	 */
	private $flex = 0;

	/**
	 * @var bool
	 */
	private $hidden = false;

	/**
	 * @param int $flex
	 */
	public function setFlex($flex)
	{
		$this->flex = Cast::int($flex);
	}

	/**
	 * @return int
	 */
	public function getFlex()
	{
		return $this->flex;
	}

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
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = Cast::string($title);
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $width
	 */
	public function setWidth($width)
	{
		$this->width = Cast::string($width);
	}

	/**
	 * @return string
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param boolean $hidden
	 */
	public function setHidden($hidden)
	{
		$this->hidden = Cast::bool($hidden);
	}

	/**
	 * @return boolean
	 */
	public function getHidden()
	{
		return $this->hidden;
	}




}