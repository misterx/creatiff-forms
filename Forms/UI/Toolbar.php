<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Control;


class Toolbar extends Control{

	const DOCK_TOP = 'top';
	const DOCK_LEFT = 'left';
	const DOCK_RIGHT = 'right';
	const DOCK_BOTTOM = 'bottom';

	/**
	 * @var string
	 */
	private $dock = self::DOCK_TOP;

	/**
	 * @param string $dock
	 */
	public function setDock($dock)
	{
		$this->dock = Cast::enum($dock,[self::DOCK_TOP, self::DOCK_LEFT,self::DOCK_RIGHT, self::DOCK_BOTTOM],$default = self::DOCK_TOP);
	}

	/**
	 * @return string
	 */
	public function getDock()
	{
		return $this->dock;
	}



}