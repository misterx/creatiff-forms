<?php
namespace Creatiff\Forms;

use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Wrapper\RenderInterface;
use Creatiff\Forms\UI\Event;
use RecursiveIterator;

/**
 * Class Component base of all UI components
 * @package Creatiff
 */
abstract class Component implements \RecursiveIterator{

	/** @var Component */
	private $owner;
	/** @var Component[] */
	private $components = array();

	/**
	 * @param Component $owner
	 */
	public function __construct(Component $owner = null)
	{
		$this->setId('id'.md5(uniqid('',true)));

		if ($owner != null) {
			$owner->insertComponent($this);
		}


	}

	/**
	 * Insert child component into the current
	 * @param Component $component
	 */
	public function insertComponent(Component $component)
	{
		$component->validateContainer($this);
		$this->validateId($component, null, $component->id);
		$this->insert($component);
	}

	/**
	 * Find child component by id !not recursive
	 * @param $id
	 * @return Component|null
	 */
	public function findComponent($id)
	{
		if (!$id) {
			return null;
		}

		foreach ($this->components as $component) {
			if ($component->id == $id) {
				return $component;
			}
		}
	}

	/**
	 * Return child components count
	 * @return int
	 */
	public function getComponentCount(){
		return count($this->components);
	}

	/**
	 * Return component index in parent childs
	 * @return bool|int
	 */
	public function getComponentIndex(){
		if ($this->owner) {
			foreach ($this->owner->components as $k => $v) {
				if ($this == $v) {
					return $k;
				}
			}
			return false;
		} else {
			return false;
		}
	}

	/**
	 * Set component index in parent childs
	 * @param $index
	 */
	public function setComponentIndex($index){
		$current_index = $this->getComponentIndex();

		if ($current_index === false) {
			return;
		}

		$index = (int)$index;

		if ($index < 0) {
			$index = 0;
		}

		$count = count($this->owner->components);

		if ($index >= $count) {
			$index = $count - 1;
		}

		if ($index != $current_index)
		{
			unset($this->owner->components[$current_index]);
			array_splice($this->owner->components,$index,0,array($this));
		}
	}


	/**
	 * Get child component by index
	 * @param $index
	 * @return Component
	 * @throws Exception
	 */
	public function getComponent($index)
	{
		if(!array_key_exists($index,$this->components)){
			throw new Exception('Invalid index :index', array(':index' => $index));
		}
		return $this->components[$index];
	}

	/**
	 * Get all child components
	 * @return Component[]
	 */
	public function getComponents()
	{
		return $this->components;
	}

	/**
	 * Get component owner
	 * @return Component
	 */
	public function getOwner()
	{
		return $this->owner;
	}

	/**
	 * Inserting component to child array
	 * @param Component $component
	 */
	private function insert(Component $component)
	{
		$this->components[] = $component;
		$component->owner = $this;
	}

	/**
	 * @var null
	 */
	private $id = null;

	/**
	 * Setter for id
	 * @param $new_id
	 * @return mixed
	 * @throws Exception
	 */
	protected function setId($new_id)
	{
		if ($this->id == $new_id) {
			return $new_id;
		}

		if (($new_id != '') and !$this->isValidId($new_id)) {
			throw new Exception('Invalid ID :id', array(':id' => $new_id));
		}

		if ($this->owner) {
			$this->owner->validateId($this, $this->id, $new_id);
		} else {
			$this->validateId(null, $this->id, $new_id);
		}

		$this->id = $new_id;
	}

	/**
	 * Getter for id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * @var null
	 */
	private $class = null;


	/**
	 * @param null $class
	 */
	public function setClass($class)
	{
		$this->class = Cast::string($class);
	}

	/**
	 * @return null
	 */
	public function getClass()
	{
		return $this->class;
	}

	/**
	 * @var null
	 */
	private $listeners=array();


	/**
	 * @param Event|Collection $listeners
	 * @throws Exception\Component
	 */
	public function setListeners($listeners)
	{
		if($listeners instanceof Event){
			$listeners = Collection::factory(array($listeners));
		}

		if($listeners instanceof Creatiff\Forms\Collection){
			throw new Exception('Listeners must be collection but :given given',array(':given'=>get_class($listeners)));
		}
		$this->listeners = $listeners;
	}

	/**
	 * @return null
	 */
	public function getListeners()
	{
		return $this->listeners;
	}


	/*
	 * Validators
	 */

	/**
	 * Check if valid component id
	 * @param $id
	 * @return bool
	 */
	protected function isValidId($id)
	{
		return true;
	}

	/**
	 * Validating id component relative to all parent components
	 * @param Component $component
	 * @param $cur_id
	 * @param $new_id
	 * @throws Exception
	 */
	protected function validateId(Component $component = null, $cur_id, $new_id)
	{
		if (($component != null) and ($cur_id != $new_id) and ($component->owner == $this) and $this->findComponent($new_id)) {
			throw new Exception('Duplicated id :id', array(':id' => $new_id));
		}
	}

	/**
	 * Validate insert container
	 * @param Component $component
	 * @throws Exception
	 */
	protected function validateContainer(Component $component)
	{
		$component->validateInsert($this);
	}

	/**
	 * Validate child component
	 * @param Component $component
	 * @throws Exception
	 */
	protected function validateInsert(Component $component)
	{

	}

	/**
	 * @param RenderInterface $renderInterface
	 * @return mixed
	 */
	public function render(RenderInterface $renderInterface){
		return $renderInterface->render($this);
	}

	/**
	 * @return string
	 */
	public function getTemplateName(){
		return get_class($this);
	}

	/**
	 * @param $name
	 * @param $value
	 * @throws Exception\Component
	 */
	public function __set($name,$value)
	{
		$setter='set'.$name;
		if(method_exists($this,$setter))
			$this->$setter($value);
		else
			throw new Exception('Unable to set property ":property" in :component',[':property'=>$name,':component'=>get_class($this)]);
	}

	/**
	 * @param $name
	 * @return mixed
	 * @throws Exception\Component
	 */
	public function __get($name)
	{
		$getter='get'.$name;
		if(method_exists($this,$getter))
			return $this->$getter();
		else
			throw new Exception('Unable to get property ":property" in :component',[':property'=>$name,':component'=>get_class($this)]);
	}

	/**
	 * Iterator functions
	 */

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns if an iterator can be created for the current entry.
	 * @link http://php.net/manual/en/recursiveiterator.haschildren.php
	 * @return bool true if the current entry can be iterated over, otherwise returns false.
	 */
	public function hasChildren()
	{
		return (bool)$this->current()->getComponentCount();
	}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns an iterator for the current entry.
	 * @link http://php.net/manual/en/recursiveiterator.getchildren.php
	 * @return RecursiveIterator An iterator for the current entry.
	 */
	public function getChildren()
	{
		return $this->current();
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 */
	public function current()
	{
		return current($this->components);
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Move forward to next element
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	public function next()
	{
		next($this->components);
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return the key of the current element
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return mixed scalar on success, or null on failure.
	 */
	public function key()
	{
		return key($this->components);
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Checks if current position is valid
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 */
	public function valid()
	{
		return null !== $this->key();
	}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Rewind the Iterator to the first element
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	public function rewind()
	{
		reset($this->components);
	}

}