<?php

require_once("02-Vehicle.php");

class Bicycle extends Vehicle {
        public function __construct() {
                $this->numWheels = 2;
                $this->motorized = false;
                $this->numSeats = 1;
        }
}
