<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

$total = 14; // total random numbers to create

$randoms = [];



for ($i = 0; $i <= $total; $i++) {
    $randomNumbers = rand(1, 50);
    while (in_array($randomNumbers, $randoms)) {
        $randomNumbers = rand(1, 50);
    }
    $randoms[] = $randomNumbers;
}

var_dump($randoms);
