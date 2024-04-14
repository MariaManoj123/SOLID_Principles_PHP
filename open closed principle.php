<?php

// Interface representing a vehicle
interface Vehicle {
    public function drive();
}

// Class representing a car
class Car implements Vehicle {
    public function drive() {
        echo "Driving a car...\n";
    }
}

// Class representing a bike
class Bike implements Vehicle {
    public function drive() {
        echo "Riding a bike...\n";
    }
}

// Class representing a truck
class Truck implements Vehicle {
    public function drive() {
        echo "Driving a truck...\n";
    }
}

// Usage

$car = new Car();
$car->drive();

$bike = new Bike();
$bike->drive();

$truck = new Truck();
$truck->drive();
?>
