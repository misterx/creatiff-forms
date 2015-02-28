<?php

namespace Creatiff\Forms\Wrapper;

class Locator implements LocatorInterface{

	protected $directory;
	protected $extension;

	public function __construct($directory=__DIR__,$extension = 'php'){
		$this->directory = $directory;
		$this->extension = $extension;
	}

	public function findFile($template)
	{
		return $this->directory.DIRECTORY_SEPARATOR.$template.'.'.$this->extension;
	}


}