<?php

class Page {
    public $html;
    protected $title;

    public function __construct($title = "Default Page") {
        $this->html = "";
        $this->title = $title;
    }

    public function makeHeader($header) {
        // Your code goes here
    }

    public function makeBody($content = []) {
        // Your code goes here
    }

    public function makeFooter($footer) {
        // Your code goes here
    }

    public function display() {
        // Your code goes here
    }
}
