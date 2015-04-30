<?php
namespace Cassandra\Type;

class Uuid extends Base{

	/**
	 * @param string $value
	 * @throws Exception
	 */
	public function __construct($value){
        $value = (string)$value;

		$this->_value = $value;
	}
	
	public function getBinary(){
		return pack('H*', str_replace('-', '', $this->_value));
	}
}
