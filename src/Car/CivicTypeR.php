<?php namespace Acme\Car;

use Acme\Contracts\Car;
use Acme\Fuel\Ron97;

class CivicTypeR implements Car
{
    /**
     * The implementation of fuel.
     *
     * @var \Acme\Fuel\Ron97
     */
    protected $fuel;

    /**
     * Construct a new Car implementation.
     *
     * @param \Acme\Fuel\Ron97 $fuel
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
