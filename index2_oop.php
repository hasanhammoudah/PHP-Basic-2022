<?php

// Inheritance

class Vehicle{

    //Attributes

    protected $model;
    protected $year;

    // Constructor

    public function __construct($model,$year)
    {
       
    }


    public function setModel($model){

    }

    public function getModel(){

    }


    public function setYear($year){
   

    }

    public function getYear(){

    }


    // Methods

    public function start(){
    }


    public function stop(){
    }
}




// is-a car is a vehicle

class Car extends Vehicle{

   // private $model;
  //  private $year;
    private $color;

    public function __construct($model,$year,$color){
       // parent::__construct($model,$year);
    $this->model =$model;
     $this->year =$year;
     $this->color = $color;

    }



    public function printInfo(){
        echo "{$this->model} / {$this->year}";
    }

}


//Object 

$vehicle = new Vehicle('airbus', 2022);
$car = new Car('BMW', 2022, 'Red');
$car->printInfo();

?>