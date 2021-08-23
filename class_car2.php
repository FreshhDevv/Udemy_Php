<?php

class Car {
    function MoveWheels() {
        echo "Wheels move";
    }

}
if(method_exists("Car", "MoveWheels")) {
    echo "yaaaayyy!!";
} else {
    echo "no";
}