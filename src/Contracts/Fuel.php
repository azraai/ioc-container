<?php namespace Acme\Contracts;

interface Fuel
{
    /**
     * Get fuel price.
     *
     * @return double
     */
    public function getPrice();

    /**
     * Set fuel price.
     *
     * @param  double  $price
     * @return double
     */
    public function setPrice($price);
}
