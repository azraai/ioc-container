<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->bind('FuelInterface', 'Ron95');

// Imagine if out of sudden, you need to calculate GST
// for all the fuels.
$app->afterResolving('FuelInterface', function ($fuel) {
    return $fuel->setPrice($fuel->getPrice() * 1.06);
});

$axia = $app->make('Axia');

echo $axia->refuel(100) . PHP_EOL;

$civic = $app->make('CivicTypeR');

echo $civic->refuel(100) . PHP_EOL;
