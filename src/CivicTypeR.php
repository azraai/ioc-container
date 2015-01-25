<?php

class CivicTypeR implements CarInterface
{
    /**
     * The implementation of fuel.
     *
     * @var Ron97
     */
    protected $fuel;

    /**
     * Construct a new Car implementation.
     *
     * @param Ron97 $fuel
     */
    public function __construct(Ron97 $fuel)
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
