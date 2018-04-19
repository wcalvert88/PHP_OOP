<?php 

class Cars {

    static $wheel_count = 4;


    static function car_detail() {
        // Need static properties in static method
        return self::$wheel_count;
    }
    
}

class Trucks extends Cars {
    static function display() {
        echo parent::car_detail();
    }

}

Trucks::display();
echo "<br>";
echo Trucks::car_detail();
?>