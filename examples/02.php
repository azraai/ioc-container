<?php

require_once "vendor/autoload.php";

$app = new Illuminate\Container\Container();

$app->bind('FuelInterface', 'Ron95');

$axia = $app->make('Axia');

echo $axia->refuel(100) . PHP_EOL;

$civic = $app->make('CivicTypeR');

echo $civic->refuel(100) . PHP_EOL;