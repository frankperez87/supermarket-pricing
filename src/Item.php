<?php

interface Item
{
    public function __construct($price, $units);

    public function getName();

    public function getPrice();

    public function getUnits();

    public function calculatePrice();

    public function setUnits($units);

    public function applySpecial();
}