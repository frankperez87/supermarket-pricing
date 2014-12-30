<?php

/**
 * Class Noodle
 */
class Noodle implements Item
{
    /**
     * @var string
     */
    protected $name = 'Noodles';
    /**
     * @var
     */
    protected $price;
    /**
     * @var
     */
    protected $units;
    /**
     * @var
     */
    protected $total;

    /**
     * @param $price
     * @param $units
     */
    public function __construct($price, $units)
    {
        $this->price = $price;
        $this->units = $units;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return 'Each';
    }

    /**
     * Apply Special for this product
     */
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
