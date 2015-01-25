<?php

interface CarInterface
{
    /**
     * Refuel the car.
     *
     * @param  int|double $litres
     * @return double
     */
    public function refuel($litres);
}