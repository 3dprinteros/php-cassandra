<?php
namespace Cassandra\Type;

class Int extends Base{

	/**
	 * @param int|string $value
	 * @throws Exception
	 */
	public function __construct($value){
		$this->_value = (int) $value;
	}
	
	public function getBinary(){
		return pack('N', $this->_value);
	}
}
