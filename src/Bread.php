<?php

class Bread implements Item
{
    protected $name = 'Loaf of Bread';
    protected $price;
    protected $units;
    protected $total;

    public function __construct($price, $units)
    {
        $this->price = $price;
        $this->units = $units;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->total;
    }

    /**
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param mixed $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

    /**
     * @return mixed
     */
    public function calculatePrice()
    {
        $this->total = $this->price * $this->units;
    }

    public function getUnitOfMeasure()
    {
        return 'Each';
    }

    public function applySpecial()
    {
        // TODO: Implement applySpecial() method.
    }
}
