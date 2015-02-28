<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Collection;
use Creatiff\Forms\Control;
use Creatiff\Forms\Property;

class Panel extends Control{

	/**
	 * @var string
	 */
	private $layout = 'auto';
	/**
	 * @var string
	 */
	private $title = null;
	/**
	 * @var string
	 */
	private $width = null;
	/**
	 * @var string
	 */
	private $height = null;
	/**
	 * @var int
	 */
	private $flex = 0;
	/**
	 * @var boolean
	 */
	private $frame = true;

	/**
	 * @var Collection|Toolbar
	 */
	private $toolbars = null;


	/**
	 *  TODO: Make it Enum
	 *  north - Positions component at top.
		south - Positions component at bottom.
		east - Positions component at right.
		west - Positions component at left.
		center - Positions component at the remaining space. There must be a component with region: "center" in every border layout.
	 * @var null
	 */
	private $region = null;

	/**
	 * @param Collection $toolbars
	 */
	public function setToolbars($toolbars)
	{
		if(($toolbars instanceof Collection) or  ($toolbars instanceof Toolbar)){
			$this->toolbars = $toolbars;
		}
	}

	/**
	 * @return \Creatiff\Forms\Collection
	 */
	public function getToolbars()
	{
		return $this->toolbars;
	}


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
	 * @param boolean $frame
	 */
	public function setFrame($frame)
	{
		$this->frame = Cast::bool($frame);
	}

	/**
	 * @return boolean
	 */
	public function getFrame()
	{
		return $this->frame;
	}

	/**
	 * @param string $height
	 */
	public function setHeight($height)
	{
		$this->height = Cast::string($height);
	}

	/**
	 * @return string
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param string $layout
	 */
	public function setLayout($layout)
	{
		$this->layout = Cast::string($layout);
	}

	/**
	 * @return string
	 */
	public function getLayout()
	{
		return $this->layout;
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
	 * @param null $region
	 */
	public function setRegion($region)
	{
		$this->region = Cast::string($region);
	}

	/**
	 * @return null
	 */
	public function getRegion()
	{
		return $this->region;
	}







}