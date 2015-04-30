<?php
namespace Cassandra\Type;

class Boolean extends Base{
	
	/**
	 * @param bool $value
	 * @throws Exception
	 */
	public function __construct($value){
		$this->_value = boolval($value);
	}
	
	public function getBinary(){
		return $this->_value ? chr(1) : chr(0);
	}
}
