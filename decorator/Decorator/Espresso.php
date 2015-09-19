<?php

class Espresso extends Beverage {
    public $description;

    public function __construct() {
        $this->description = 'Espresso';
    }

    public function getDescription() {
        echo $this->description . '<br>';
    }

    public function cost() {
        return 1.99;
    }
}