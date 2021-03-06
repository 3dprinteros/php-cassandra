<?php
namespace Cassandra\Type;

class Double extends Base{

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
		return strrev(pack('d', $this->_value));
	}
}
