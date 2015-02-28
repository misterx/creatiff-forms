<?php
namespace Creatiff\Forms\UI\Form;

interface FieldInterface{

	public function setValue($value);
	public function getValue();

	public function setName($name);
	public function getName();

	public function setLabel($name);
	public function getLabel();


}