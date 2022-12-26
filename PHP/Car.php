<?php
require_once('Account.php');

class Car {
  public $id;
  public $license;
  public $driver;
  protected $passenger;
  
  public function __construct($license, $driver) {
    $this->license = $license;
    $this->driver = $driver;
  }

  public function PrintDataCar() {
    echo "
    licencia: $this->license 
    Driver: {$this->driver->name}
    Passenger number: $this->passenger
    ";
  }

  public function getPassenger() {
    return $this->passenger;
  }

  public function setPassenger($passenger) {
    if($passenger == 4) {
      $this->passenger = $passenger;
    }
    else {
      echo "You need to assign 4 passengers";
    }
  }

}
