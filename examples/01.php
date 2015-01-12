<?php

require_once "vendor/autoload.php";

$axia = new Acme\Car\Axia(new Acme\Fuel\Ron95());

echo $axia->refuel(50) . PHP_EOL;

$civic = new Acme\Car\CivicTypeR(new Acme\Fuel\Ron97());

echo $civic->refuel(50) . PHP_EOL;