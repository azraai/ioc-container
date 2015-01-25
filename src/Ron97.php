<?php

class Ron97 implements FuelInterface
{
    /**
     * Price value.
     *
     * @var double
     */
    protected $value = 2.11;

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
