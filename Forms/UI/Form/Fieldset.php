<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Property;
use Creatiff\Forms\UI\Panel;

class Fieldset extends Panel{

	/**
	 * @var string
	 */
	private $title = '';

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




}