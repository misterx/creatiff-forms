<?php
namespace Creatiff\Forms\UI\Grid\Column;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Property;
use Creatiff\Forms\UI\Grid\Column;

class Template extends Column{

	/**
	 * @var string
	 */
	private $tpl = '';

	/**
	 * @param string $tpl
	 */
	public function setTpl($tpl)
	{
		$this->tpl = Cast::string($tpl);
	}

	/**
	 * @return string
	 */
	public function getTpl()
	{
		return $this->tpl;
	}



}