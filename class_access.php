<?php

use Car as GlobalCar;

class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;


    function showProperty() {
        
        echo $this->hood;
     }


}
$bmw = new Car();

$semi = new Semi();

class Semi extends Car{
    

   

}
echo $bmw->showProperty();