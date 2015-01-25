<?php

class Axia implements CarInterface
{
    /**
     * The implementation of fuel.
     *
     * @var FuelInterface
     */
    protected $fuel;

    /**
     * Construct a new Car implementation.
     *
     * @param FuelInterface $fuel
     */
    public function __construct(FuelInterface $fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * Refuel the car.
     *
     * @param  int|double  $litres
     * @return double
     */
    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}
