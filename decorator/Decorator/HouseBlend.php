<?php

class HouseBlend extends Beverage {
    public function __construct() {
        $this->description = 'House Blend Coffee';
    }

    public function getDescription() {
        return $this->description;
    }

    public function cost() {
        return .89;
    }
}