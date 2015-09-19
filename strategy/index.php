<?php

require 'Strategy/ObjectCollection.php';
require 'Strategy/ComparerInterface.php';
require 'Strategy/TitleComparer.php';
require 'Strategy/DateComparer.php';
require 'Strategy/AuthorComparer.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$elements = array(
    array(
        'title' => 'Bushcraft 101: A Field Guide to the Art of Wilderness Survival',
        'pub-date' => '2014-09-01',
        'author' => 'Dave Canterbury'
    ),
    array(
        'title' => 'Complexity and the Arrow of Time',
        'pub-date' => '2013-09-23',
        'author' => 'Charles H. Lineweaver'
    ),
    array(
        'title' => 'Parable of the Sower',
        'pub-date' => '2000-01-01',
        'author' => 'Octavia E. Butler'
    ),
    array(
        'title' => 'JavaScript: The Good Parts',
        'pub-date' => '2008-05-01',
        'author' => 'Douglas Crockford'
    )
);

$type = (!empty($_GET['type']) ? htmlspecialchars($_GET['type']) : 'title');

$collection = new ObjectCollection($elements);

switch($type) {
    case 'date':
        $collection->setComparer(new DateComparer);
        break;
    case 'author':
        $collection->setComparer(new AuthorComparer);
        break;
    case 'title':
    default:
        $collection->setComparer(new TitleComparer);
}

$collection->sort();
$collection->display();