<?php namespace Acme\Fuel;

use Acme\Contracts\Fuel;

class Ron97 implements Fuel
{
    /**
     * Get fuel price.
     *
     * @return double
     */
    public function getPrice()
    {
        return 2.11;
    }
}
