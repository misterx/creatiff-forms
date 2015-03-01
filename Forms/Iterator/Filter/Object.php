<?php
namespace Creatiff\Forms\Iterator\Filter;


class Object extends \RecursiveFilterIterator {

	/**
	 * @var null
	 */
	private $kind = null;


	public function __construct(\RecursiveIterator $iterator, $kind )
	{
		$this->kind = $kind;
		parent::__construct( $iterator );
	}

	public function accept()
	{
		return $this->hasChildren() || $this->current() instanceof $this->kind;
	}

	public function getChildren()
	{
		return new self($this->getInnerIterator()->getChildren(), $this->kind );
	}

}