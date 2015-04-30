<?php
namespace Cassandra\Type;

class Blob extends Base{

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
		return pack('N', strlen($this->_value)) . $this->_value;
	}
}
