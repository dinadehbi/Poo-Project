<?php

class Cars {
    private $brand;
    private $model;

    // Constructor to initialize the brand and model
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to display car details
    public function myCars() {
        echo 'This is my car: ' . $this->brand . ', its model is: ' . $this->model;
    }
}

// Instantiate the Cars object with brand and model
$myCar = new Cars('Mercedes', 'G-Class');
$myCar->myCars();

?>
