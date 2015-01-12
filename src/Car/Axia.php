<?php namespace Acme\Car;

use Acme\Contracts\Car;
use Acme\Contracts\Fuel;

class Axia implements Car
{
    /**
     * The implementation of fuel.
     *
     * @var \Acme\Contracts\Fuel
     */
    protected $fuel;

    /**
     * Construct a new Car implementation.
     *
     * @param \Acme\Contracts\Fuel $fuel
     */
    public function __construct(Fuel $fuel)
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
