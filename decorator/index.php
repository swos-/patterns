<?php

require 'Decorator/Beverage.php';
require 'Decorator/Condiment.php';
require 'Decorator/Espresso.php';
require 'Decorator/HouseBlend.php';
require 'Decorator/Mocha.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$beverage = new Espresso();
$beverage->getDescription();

$beverage2 = new Houseblend();
$beverage2 = new Mocha($beverage2);
echo $beverage2->cost();