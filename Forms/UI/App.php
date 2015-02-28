<?php
namespace Creatiff\Forms\UI;

use Creatiff\Forms\Cast;
use Creatiff\Forms\Component;
use Creatiff\Forms\Control;
use Creatiff\Forms\Property;

class App extends Component{


	/**
	 * @var string
	 */
	private $name='';

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = Cast::string($name);
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}





	public function defaultView(){
		foreach($this->getComponents() as $component){
			if($component instanceof Control){
				return $component;
			}
		}
	}

}