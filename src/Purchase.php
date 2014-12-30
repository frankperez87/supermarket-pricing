<?php

/**
 * Class Purchase
 */
class Purchase
{

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param Item $item
     */
    public function addProduct(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return number
     */
    public function getTotal()
    {
        $items = array_map(function($item){
            $item->calculatePrice();
            $item->applySpecial();
            return $item->getPrice();
        }, $this->items);
        return array_sum($items);
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }
}
