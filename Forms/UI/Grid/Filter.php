<?php
namespace Creatiff\Forms\UI\Grid;

use Creatiff\Forms\Component;
use Creatiff\Forms\Exception;

abstract class Filter extends Component{

	public static function factory($type){
		$class_name =  __NAMESPACE__.'\Filter\\'.$type;
		if(!class_exists($class_name)){
			throw new Exception('Unable to find filter: :filter',[':filter'=>$type]);
		}
		return new $class_name;
	}

}