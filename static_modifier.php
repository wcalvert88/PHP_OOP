<?php 

class Cars {

    static $wheel_count = 4;
    static $door_count = 4;


    static function car_detail() {
        // Need static properties in static method
        echo Cars::$wheel_count;
        echo "<br>";
        echo Cars::$door_count;
        echo "<br>6";
    }
    
}

echo Cars::$door_count;
echo Cars::car_detail();
?>