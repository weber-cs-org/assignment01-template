<?php

require_once("02-StorageInterface.php");

class FileStorage implements Storage {
    protected $filename;

    public function __construct() {
        $this->filename = "data.txt";
    }

    // Your code goes here
}

