<?php

// 1. Encapsulation
// 2. Abstraction
// 3. Inheritance
// 4. Polymorphism

// Classes

class Vehicle {

    //Attributes

    private $model;
    private $year;

    // Constructor

    public function __construct( $model, $year ) {
        $this ->model = $model;
        $this ->year  = $year;
    }

    public function setModel( $model ) {
        $this ->model = $model;

    }

    public function getModel() {
        return $this->model;

    }

    public function setYear( $year ) {
        if ( is_int( $year ) ) $this ->model = $year;
        else throw new Exception( 'Invalid year' );

    }

    public function getYear() {
        return $this->year;

    }

    // Methods

    public function start() {
        echo "{$this->model} Engine Started!";
    }

    public function stop() {
        echo "{$this->model} Engine Stoped!";
    }
}

//Object

$vehicle = new Vehicle( 'BMW', 2022 );
//$vehicle -> start();

//$anothVehical = new Vehicle ( 'honda', 2022 );
//$anothVehical -> start();

//Encapsulation

$vehicle ->setModel( 'Honda' );
echo $vehicle-> getModel();

$vehicle ->setYear( 2022 );
echo $vehicle-> getYear();

?>