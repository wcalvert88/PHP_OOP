<?php 

class Cars {

    private $door_count = 4;
    // private methods are for stuff that will not be universal to all methods and could get confused by people coming into the project later making assumptions that aren't true. or stuff that you think is obvious but other people don't

    function get_values() {
        echo $this->door_count;
    }

    function set_values() {
        $this->door_count = 10;
    }
    
}

$bmw = new Cars();

$bmw->set_values();
$bmw->get_values();

// echo $bmw->wheel_count;
// echo $bmw->door_count;
// echo $bmw->seat_count;
?>