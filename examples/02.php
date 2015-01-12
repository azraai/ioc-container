<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->bind('Acme\Contracts\Fuel', 'Acme\Fuel\Ron95');

$axia = $app->make('Acme\Car\Axia');

echo $axia->refuel(50) . PHP_EOL;

$ron97 = $app->make('Acme\Fuel\Ron97');
$civic = $app->make('Acme\Car\CivicTypeR', [$ron97]);

echo $civic->refuel(50) . PHP_EOL;