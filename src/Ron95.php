<?php

class Ron95 implements FuelInterface
{
    /**
     * Base value.
     *
     * @var double
     */
    protected $value = 1.91;

    /**
     * Price value.
     *
     * @var double|null
     */
    protected $price = null;

    /**
     * Get fuel price.
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price ?: $this->value;
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
