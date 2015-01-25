<?php

require_once "vendor/autoload.php";

$axia = new Axia(new Ron95());

echo $axia->refuel(100) . PHP_EOL;

$civic = new CivicTypeR(new Ron97());

echo $civic->refuel(100) . PHP_EOL;