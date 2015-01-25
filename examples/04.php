<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->when('Axia')
    ->needs('FuelInterface')
    ->give('Ron97');

$axia = $app->make('Axia');

echo $axia->refuel(100) . PHP_EOL;

$civic = $app->make('CivicTypeR');

echo $civic->refuel(100) . PHP_EOL;