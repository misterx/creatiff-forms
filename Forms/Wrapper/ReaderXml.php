<?php
namespace Creatiff\Forms\Wrapper;
use Creatiff\Forms\Collection;
use Creatiff\Forms\Component;
use Creatiff\Forms\UI\Grid\Column;

class ReaderXml implements ReaderInterface{

	/** @var  LocatorInterface */
	protected $locator;
	protected $namespace = 'Creatiff\Forms\UI\\';
	protected $aliases = array(
		'Checkbox' => 'Form.Checkbox',
		'Fieldset' => 'Form.Fieldset',
		'Text' => 'Form.Text',
		'Textarea' => 'Form.Textarea',
	);

	public function __construct(LocatorInterface $locator){
		$this->locator = $locator;
	}

	/**
	 * @param $name
	 * @return Component
	 */
	public function read($name)
	{
		$filename = $this->locator->findFile($name);
		$xml = new \SimpleXMLElement(file_get_contents($filename));
		return $this->parse($xml);
	}

	protected function fullClassName($name){
		return str_ireplace('.','\\',$this->namespace.$name);
	}

	protected function alias($name){
		return array_key_exists($name,$this->aliases)?$this->aliases[$name]:$name;
	}

	protected function parse(\SimpleXMLElement $xml){

		$class_name = $this->fullClassName($this->alias((string)$xml->getName()));
		/** @var Component $component */
		$component = new $class_name();
		foreach($xml->attributes() as $name=>$value){
			$component->$name = $this->phpize($value);
		}

		//Try to fetch namespace attributes
		foreach($xml->children('property',true) as $property){

			$name = (string)$property->getName();

			if($property->children()){
				//Значит указан в пропертях обьект, создаем для него колецию
				if(count($property->children())>1){
					$collection = new Collection();
					foreach($property->children() as $child_property){
						$collection->insertComponent($this->parse($child_property));
					}
					$component->$name = $collection;
				}else{
					$component->$name = $this->parse($property->children());
				}

			}else{
				//Текстовое значение
				$component->$name = (string)$property;
			}
		}

		//Next parse children
		foreach($xml->children() as $children){
			$children_component = $this->parse($children);
			$component->insertComponent($children_component);
		}
		return $component;
	}

	/**
	 * Converts an xml value to a php type.
	 *
	 * @param mixed $value
	 *
	 * @return mixed
	 */
	protected function phpize($value)
	{
		$value = (string) $value;
		$lowercaseValue = strtolower($value);

		switch (true) {
			case 'null' === $lowercaseValue:
				return null;
			case ctype_digit($value):
				$raw = $value;
				$cast = intval($value);
				return '0' == $value[0] ? octdec($value) : (((string) $raw == (string) $cast) ? $cast : $raw);
			case 'true' === $lowercaseValue:
				return true;
			case 'false' === $lowercaseValue:
				return false;
			case is_numeric($value):
				return '0x' == $value[0].$value[1] ? hexdec($value) : floatval($value);
			case preg_match('/^(-|\+)?[0-9]+(\.[0-9]+)?$/', $value):
				return floatval($value);
			default:
				return $value;
		}
	}



}