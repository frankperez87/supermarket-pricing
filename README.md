# Supermarket Pricing
This allows you to price various items in a supermarket at different prices and specials.

### Example Usage
```php
<?php

require 'vendor/autoload.php';

$purchase = new Purchase;

$bread = new Bread(1.00, 1);
$purchase->addProduct($bread);

$noodle = new Noodle(0.50, 1);
$purchase->addProduct($noodle);

$soup = new Soup(2.00, 2);
$purchase->addProduct($soup);

// This will return an array of items added
$items = $purchase->getItems();

// This will return the total amount for this order. 
$total = $purchase->getTotal();

```