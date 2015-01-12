<?php

require_once "vendor/autoload.php";

$axia95 = new \Acme\Car\Axia(new Acme\Fuel\Ron95());

echo $axia95->refuel(50) . PHP_EOL;

$axia97 = new \Acme\Car\Axia(new \Acme\Fuel\Ron97());

echo $axia97->refuel(50) . PHP_EOL;