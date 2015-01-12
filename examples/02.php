<?php

require_once "vendor/autoload.php";

$app = new Illuminate\Container\Container();

$app->bind(Acme\Contracts\Fuel::class, Acme\Fuel\Ron95::class);

$axia = $app->make(Acme\Car\Axia::class);

echo $axia->refuel(50) . PHP_EOL;

$ron97 = $app->make(Acme\Fuel\Ron97::class);
$civic = $app->make(Acme\Car\CivicTypeR::class, [$ron97]);

echo $civic->refuel(50) . PHP_EOL;