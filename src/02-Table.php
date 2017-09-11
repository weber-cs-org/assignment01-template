<?php

class Table {
    protected $page;
    protected $content;
    protected $id;

    public function __construct($page, $content) {
        $this->page = $page;
        $this->content = $content;
        $this->id = 'defaultID';
    }

    public function setId($id) {
        // Your code goes here
    }

    public function build($colorA, $colorB) {
        // Your code goes here
    }
}


