<?php

class Soup implements Item
{
    protected $name = 'Soup cans';
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
        $total = $this->units;
        $units = $this->units;

        while($units >= 4) {
            $total += 1;
            $units -= 4;
        }

        $this->units = $total;
    }
}
