<?php

class Purchase
{

    protected $items = [];

    public function addProduct(Item $item)
    {
        $this->items[] = $item;
    }

    public function getTotal()
    {
        $items = array_map(function($item){
            $item->calculatePrice();
            $item->applySpecial();
            return $item->getPrice();
        }, $this->items);
        return array_sum($items);
    }

    public function getItems()
    {
        return $this->items;
    }
}
