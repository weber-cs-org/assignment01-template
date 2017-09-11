<?php

require_once("02-StorageInterface.php");

class MemStorage implements Storage {
    protected $data;

    public function __construct($item) {
        $this->data = [];
    }

    // Your code goes here
}

