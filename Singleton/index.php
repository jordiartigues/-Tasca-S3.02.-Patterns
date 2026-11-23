<?php

require_once 'Tigger.php';

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
$tigger3 = Tigger::getInstance();

$tigger1->roar();
$tigger2->roar();
$tigger3->roar();
$tigger1->roar();
$tigger2->roar();

echo "Tigger has roared " . $tigger1->getCounter() . " times." . PHP_EOL;

var_dump($tigger1 === $tigger2);
var_dump($tigger2 === $tigger3);