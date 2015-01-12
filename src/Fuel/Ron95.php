<?php namespace Acme\Fuel;

use Acme\Contracts\Fuel;

class Ron95 implements Fuel
{
    /**
     * Price value.
     *
     * @var double
     */
    protected $value = 1.91;

    /**
     * Get fuel price.
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->value;
    }

    /**
     * Set fuel price.
     *
     * @param  double  $price
     * @return double
     */
    public function setPrice($price)
    {
        $this->value = $price;
    }
}
