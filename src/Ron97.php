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
