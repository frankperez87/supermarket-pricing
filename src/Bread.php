<?php

/**
 * Class Bread
 */
class Bread implements Item
{
    /**
     * @var string
     */
    protected $name = 'Loaf of Bread';
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
        // TODO: Implement applySpecial() method.
    }
}
