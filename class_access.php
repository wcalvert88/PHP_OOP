<?php 

class Cars {

    public $wheel_count = 4;
    private $door_count = 4;
    // private methods are for stuff that will not be universal to all methods and could get confused by people coming into the project later making assumptions that aren't true. or stuff that you think is obvious but other people don't
    protected $seat_count = 2;
    // protected methods are avaialble to classes that inherit from it

    function car_detail() {
        echo $this->wheel_count;
        echo "<br>";
        echo $this->door_count;
        echo "<br>";
        echo $this->seat_count;
    }
    
}

$bmw = new Cars();

// echo $bmw->wheel_count;
// echo $bmw->door_count;
// echo $bmw->seat_count;
$bmw->car_detail();
?>