<?php namespace Acme;

use Acme\Contracts\Fuel;

class Ron95 implements Fuel
{
    /**
     * Get fuel price.
     *
     * @return double
     */
    public function getPrice()
    {
        return 1.911;
    }
}
