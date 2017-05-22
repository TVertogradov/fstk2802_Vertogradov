<?php

include 'vendor/autoload.php';
include 'product/product.php';
include 'product/computer.php';

$product = new Computer();

echo $product->getName();
echo PHP_EOL;
echo $product->model;
echo PHP_EOL;
echo $product->getSku();