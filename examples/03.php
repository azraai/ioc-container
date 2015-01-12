<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

// Imagine if out of sudden, you need to calculate GST
// for all the fuels.
$app->afterResolving('Acme\Contracts\Fuel', function ($fuel) {
    $price = $fuel->getPrice();

    $fuel->setPrice($price * 1.06);
});

$ron95 = $app->make('Acme\Fuel\Ron95');
$ron97 = $app->make('Acme\Fuel\Ron97');

$axia = $app->make('Acme\Car\Axia', [$ron95]);

echo $axia->refuel(50) . PHP_EOL;

$civic = $app->make('Acme\Car\CivicTypeR', [$ron97]);

echo $civic->refuel(50) . PHP_EOL;