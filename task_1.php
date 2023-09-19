<?php

function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
}

printEvenNumbersUsingForLoop(2, 20, 2);

echo PHP_EOL;

function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . ' ';
        $i += $step;
    }
}

printEvenNumbersWithWhileLoop(2, 20, 2);

echo PHP_EOL;

function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . ' ';
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersWithDoWhileLoop(2, 20, 2);
