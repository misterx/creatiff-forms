<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Traits\Storable;

class Tree extends Panel{
	use Storable;

	protected function defaultStore()
	{
		return new \Creatiff\Forms\UI\Store\Tree();
	}

}