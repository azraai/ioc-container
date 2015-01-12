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
$axia95 = $app->make('Acme\Car\Axia', [$ron95]);

echo $axia95->refuel(50) . PHP_EOL;

$ron97 = $app->make('Acme\Fuel\Ron97');
$axia97 = $app->make('Acme\Car\Axia', [$ron97]);

echo $axia97->refuel(50) . PHP_EOL;