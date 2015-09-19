<?php

interface BeverageInterface {
    public function getDescription();
    public function cost();
}

abstract class Beverage {
    abstract public function getDescription();

    abstract public function cost();
}