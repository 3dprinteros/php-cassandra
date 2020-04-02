<?php
namespace Cassandra\Type;

class Varchar extends Base{

    /**
     * @param string $value
     * @throws Exception
     */
    public function __construct($value = null){
        if ($value === null)
            return;

        $this->_binary = $this->_value = (string)$value;
    }

    public static function binary($value){
        return $value;
    }

    public static function parse($binary){
        return $binary;
    }
}
