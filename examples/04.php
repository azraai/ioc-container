<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->when('Acme\Car\Axia')->needs('Acme\Contracts\Fuel')->give('Acme\Fuel\Ron95');

$axia = $app->make('Acme\Car\Axia');

echo $axia->refuel(50) . PHP_EOL;

$civic = $app->make('Acme\Car\CivicTypeR');

echo $civic->refuel(50) . PHP_EOL;