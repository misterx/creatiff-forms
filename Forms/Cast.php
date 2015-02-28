<?php
namespace Creatiff\Forms;

class Cast{

	public static function string($value){
		return (string)$value;
	}

	public static function bool($value){
		return (bool)$value;
	}

	public static function int($value){
		return (int)$value;
	}

	public static function float($value){
		return (float)$value;
	}

	public static function enum($value,array $choices,$default){
		return in_array($value,$choices)?$value:$default;
	}

}