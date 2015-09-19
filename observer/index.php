<?php

require 'Subjects/SubjectInterface.php';
require 'Observers/ObserverInterface.php';
require 'Observers/ShoppingCart.php';
require 'Subjects/Product.php';
require 'Observers/Checkout.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$product = new Product();
$shoppingCart = new ShoppingCart();
$checkout = new Checkout();

$product->attach($shoppingCart);
$product->attach($checkout);
$product->setPrice(20);