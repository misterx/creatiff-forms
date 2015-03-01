<?php
namespace Creatiff\Forms\Iterator\Filter;

class Attribute extends \RecursiveFilterIterator {

	/**
	 * @var null
	 */
	private $attribute = null;

	/**
	 * @var null
	 */
	private $value = null;

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element of the iterator is acceptable
	 * @link http://php.net/manual/en/filteriterator.accept.php
	 * @return bool true if the current element is acceptable, otherwise false.
	 */
	public function accept()
	{
		return $this->hasChildren() || ($this->current()->{$this->attribute} == $this->value);
	}

	function __construct(\RecursiveIterator $recursiveIterator, $attribute, $value)
	{
		$this->attribute = $attribute;
		$this->value = $value;
		parent::__construct($recursiveIterator);
	}

	public function getChildren()
	{
		return new self($this->getInnerIterator()->getChildren(), $this->attribute, $this->value );
	}

}