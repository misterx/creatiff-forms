<?php
namespace Creatiff\Forms\UI\Grid\Filter;

use Creatiff\Forms\Cast;
use \Creatiff\Forms\UI\Grid\Filter;

class Boolean extends Filter{

	/**
	 * @var string
	 */
	private $noText = 'No';
	/**
	 * @var string
	 */
	private $yesText = 'Yes';

	/**
	 * @param string $noText
	 */
	public function setNoText($noText)
	{
		$this->noText = Cast::string($noText);
	}

	/**
	 * @return string
	 */
	public function getNoText()
	{
		return $this->noText;
	}

	/**
	 * @param string $yesText
	 */
	public function setYesText($yesText)
	{
		$this->yesText = Cast::string($yesText);
	}

	/**
	 * @return string
	 */
	public function getYesText()
	{
		return $this->yesText;
	}


}