<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->bind('Acme\Contracts\Fuel', 'Acme\Fuel\Ron95');

$axia95 = $app->make('Acme\Car\Axia');

echo $axia95->refuel(50) . PHP_EOL;

$ron97 = $app->make('Acme\Fuel\Ron97');
$axia97 = $app->make('Acme\Car\Axia', [$ron97]);

echo $axia97->refuel(50) . PHP_EOL;