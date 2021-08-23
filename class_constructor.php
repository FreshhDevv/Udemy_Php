<?php

use Car as GlobalCar;

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;



//creating a constructor
    function __construct()
    {
        
        
       echo $this->wheels = 10;
    }
    

    
}
$bmw = new Car();
$truck = new Car();
$semi = new Car();

