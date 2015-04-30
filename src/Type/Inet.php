<?php
namespace Cassandra\Type;

class Inet extends Base{

	/**
	 * @param string $value
	 * @throws Exception
	 */
	public function __construct($value){
        if (!is_null($value)) {
            $value = (string)$value;
        }
		
		$this->_value = $value;
	}
	
	public function getBinary(){
		return inet_pton($this->_value);
	}
}
