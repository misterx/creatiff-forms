<?php
namespace Creatiff\Forms\UI\Grid\Filter;

use \Creatiff\Forms\UI\Grid\Filter;

class Date extends Filter{


	/**
	 * @var string
	 */
	private $format = '';

	/**
	 * @var null
	 */
	private $min = null;

	/**
	 * @var null
	 */
	private $max = null;

	/**
	 * @param string $format
	 */
	public function setFormat($format)
	{
		$this->format = $format;
	}

	/**
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
	}

	/**
	 * @param null $max
	 */
	public function setMax($max)
	{
		$this->max = $max;
	}

	/**
	 * @return null
	 */
	public function getMax()
	{
		return $this->max;
	}

	/**
	 * @param null $min
	 */
	public function setMin($min)
	{
		$this->min = $min;
	}

	/**
	 * @return null
	 */
	public function getMin()
	{
		return $this->min;
	}



}