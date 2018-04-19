<?php 

class Cars {

    public $wheel_count = 4;

    static $door_count = 4;

    function __construct() {
        echo $this->wheel_count;
        echo self::$door_count++;

    }

    function __destruct() {
        echo self::$door_count--;
    }
}

$bmw = new Cars();
$mercedes = new Cars();
$ford = new Cars();
?>