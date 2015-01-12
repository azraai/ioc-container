<?php namespace Acme\Contracts;

interface Car
{
    /**
     * Refuel the car.
     *
     * @param  int|double $litres
     * @return double
     */
    public function refuel($litres);
}