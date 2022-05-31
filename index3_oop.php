<?php

// Polymorphism, Overriding

class Vehicle{
    public $model;
    protected $year;

}




// is-a car is a vehicle

class Car extends Vehicle{

   // private $model;
  //  private $year;
    private $color;

    public function __construct($model,$year,$color){
   

    }

    public function printInfo(){
        echo "{$this->model} / {$this->year} / {$this->color}";
    }
    

}


//Object 

$car = new Car('BMW', 2022, 'Red');
$car->printInfo();

?>