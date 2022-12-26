<?php
require_once('Car.php');
class UberVan extends Car {
    public $typeCardAccepted;
    public $seatsMaterial;
    protected $passenger;

    public function __construct($license, $driver, $typeCardAccepted, $seatsMaterial) {
        parent::__construct($license,$driver);
        $this->typeCardAccepted = $typeCardAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passenger) {
        if($passenger == 6) {
            $this->passenger = $passenger;
        }
        else {
            echo "You need 4 passenger";
        }
    }

    public function printDataCar() {
        echo "
            License: $this->license <br>
            Driver: {$this->driver->name} <br>
            Passenger number: $this->passenger <br>        
        ";
    }
}