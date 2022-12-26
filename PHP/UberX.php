<?php
require_once('Car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model) {
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger) {
        if($passenger == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Need 4 passengers";
        }
    }

    public function printDataCar() {
        echo "
            license: $this->license <br>
            Driver: {$this->driver->name} <br>
            Document: {$this->driver->document} <br>
            Passenger number: $this->passenger <br>
            Model: $this->model <br>
            Brand: $this->brand <br>
        ";
    }
}
?>