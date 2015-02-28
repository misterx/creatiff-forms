<?php
namespace Creatiff\Forms\Wrapper;
use Creatiff\Forms\Component;

class RenderHtml implements RenderInterface{

	/** @var  LocatorInterface */
	protected $locator;

	public function __construct(LocatorInterface $locator){
		$this->locator = $locator;
	}

	public function render(Component $component)
	{

		$file = $this->locator->findFile(str_ireplace('Creatiff\Forms\UI\\','',$component->getTemplateName()));
		return $this->capture($file,array('component'=>$component));
	}

	protected function capture($file,$data=array()){
		extract($data, EXTR_SKIP);
		ob_start();
		try{
			require $file;
		}catch (\Exception $e){
			// Delete the output buffer
			ob_end_clean();
			throw $e;
		}
		return ob_get_clean();
	}

}