<?php
class Vehicle {
    // Add protected property
    protected $brand;
    
    public function __construct($brand) {
        // Initialize brand
        $this->brand = $brand;
    }
}

class Car extends Vehicle {
    // Add private property
    private $model;

    public function __construct($brand, $model) {
        // Call parent constructor
        parent::__construct($brand);
        
        // Initialize model
        $this->model = $model;
    }

    public function displayDetails() {
        // Print brand and model
        echo "This is a " . $this->brand . " " . $this->model . ".";
    }
}

// Usage
$car = new Car("Toyota", "Corolla");
$car->displayDetails();

?>