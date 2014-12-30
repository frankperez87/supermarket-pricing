<?php

class Noodle implements Item
{
    protected $name = 'Noodles';
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
        $total = 0.00;
        $units = $this->units;
        while($units >= 3) {
            $total += 1.00;
            $units -= 3;
        }

        $total = $total + ($units * $this->price);

        $this->total = $total;
    }
}
