<?php

function Fibonacci($limit) {

    $n1 = 0;
    $n2 = 1;

    $x = 0;

    for ($i = 0; $i < $limit; $i++) {

        echo $n1;
        $n1 = $n1 + $n2;
        $n2 = $x;
        $x = $n1;
        echo PHP_EOL;
    }
}
Fibonacci(15);
