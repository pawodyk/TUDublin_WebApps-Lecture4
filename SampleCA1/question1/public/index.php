<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Book;

$b1 = new Book();

$b1->setId(1);
$b1->setTitle("Jaws");
$b1->setPrice(8.01);
$b1->setAuthor("Peter Benchley");

print $b1;