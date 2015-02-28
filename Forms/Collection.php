<?php
namespace Creatiff\Forms;
use Creatiff\Forms\Exception\Component as Exception;

/**
 * Class holder for specific type, eg. CollectionToolbar, CollectionPlugin
 * @package Creatiff
 */
class Collection extends Component{

	public static function factory($children=array())
	{
		$collection = new self();
		foreach($children as $child){
			$collection->insertComponent($child);
		}
		return $collection;
	}

	public function getTemplateName()
	{
		return 'Collection';
	}


}
