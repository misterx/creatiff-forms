<?php
namespace Creatiff\Forms;

class Exception extends \Exception{

	public function __construct($message = "", array $variables = array(), $code = 0, Exception $previous = NULL) {
	 		// Set the message
		$message = strtr($message, $variables);

		// Pass the message and integer code to the parent
		parent::__construct($message, (int) $code, $previous);

		// Save the unmodified code
		// @link http://bugs.php.net/39615
		$this->code = $code;
	}

}