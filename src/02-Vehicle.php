<?php

abstract class Vehicle {
        protected $numWheels;
        protected $motorized;
        protected $numSeats;

        public function __construct($wheels, $motor, $seats) {
                $this->motorized = $motor;
                $this->numWheels = $wheels;
                $this->numSeats = $seats;
        }

        public function Motorized() {
            // Your code goes here
        }

        public function Wheels() {
            // Your code goes here
        }

        public function Seats() {
            // Your code goes here
        }
}
