<?php

require_once "data/Product.php";

$product1 = new Product("Banana", 25000);

echo $product1->getName() . PHP_EOL;
echo $product1->getPrice() . PHP_EOL;

$product2 = new ProductDummy("Melon", 15000);

echo $product2->info();