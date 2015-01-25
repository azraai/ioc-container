<?php

interface FuelInterface
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
