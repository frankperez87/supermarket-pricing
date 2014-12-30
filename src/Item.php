<?php

/**
 * Interface Item
 */
interface Item
{
    /**
     * @param $price
     * @param $units
     */
    public function __construct($price, $units);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function getUnits();

    /**
     * @return mixed
     */
    public function calculatePrice();

    /**
     * @param $units
     * @return mixed
     */
    public function setUnits($units);

    /**
     * @return mixed
     */
    public function applySpecial();
}