<?php namespace Acme\Car;

use Acme\Contracts\Car;

class Evo10 implements Car
{
    /**
     * Refuel the car.
     *
     * @param  int|double $litres
     * @return double
     */
    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }

}
