<?php

require_once "vendor/autoload.php";

$app = new \Illuminate\Container\Container();

$app->when(Acme\Car\Axia::class)
    ->needs(Acme\Contracts\Fuel::class)
    ->give(Acme\Fuel\Ron95::class);

$axia = $app->make(Acme\Car\Axia::class);

echo $axia->refuel(50) . PHP_EOL;

$civic = $app->make(Acme\Car\CivicTypeR::class);

echo $civic->refuel(50) . PHP_EOL;