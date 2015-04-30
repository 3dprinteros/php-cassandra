<?php
namespace Cassandra\Type;

class Custom extends Blob{
	/**
	 * 
	 * @var string
	 */
	protected $_name;
	
	/**
	 * 
	 * @param string $value
	 * @param string $name
	 * @throws Exception
	 */
	public function __construct($value, $name){
        if (!is_null($value)) {
            $value = (string)$value;
        }
	
		$this->_value = $value;
		$this->_name = $name;
	}
}
