<?php

class Mocha extends CondimentDecorator {
    private $beverage;
    private $description;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        echo $this->description . '<br>';
    }

    public function cost() {
        return .20 + $this->beverage->cost();
    }
}