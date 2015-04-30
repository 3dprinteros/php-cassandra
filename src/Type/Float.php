<?php
namespace Cassandra\Type;

class Float extends Base{
	/**
	 * @param double $value
	 * @throws Exception
	 */
	public function __construct($value){
        if (!is_null($value)) {
            $value = doubleval($value);
        }
	
		$this->_value = $value;
	}
	
	public function getBinary(){
		return strrev(pack('f', $this->_value));
	}
}
