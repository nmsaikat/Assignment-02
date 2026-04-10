<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        // Initialize
        $this->name = $name;
        $this->salary = $salary;
    }

    public function updateSalary($amount) {
        // Add amount to salary
        $this->salary += $amount;
    }

    public function getDetails() {
        // Echo Name and Salary
        echo "Name: " . $this->name . ", Salary: " . $this->salary;
    }
}

// Usage
$emp = new Employee("Alice", 5000);
$emp->updateSalary(1000);
$emp->getDetails();

?>