<?php
/* 
* find out fibonacci series using recursive function
*/

function fibonacci($old, $new, $start, $end){
    if($start > $end){ // added breaking condition 
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new; // $_temp variable is temporary 
    $old = $new; 
    $new = $_temp;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0, 1, 1, 10);

echo PHP_EOL;

function fibonacciStaticVariable($old, $new, $end){

    static $start;
    $start = $start ?? 0;

    if($start > $end){ // added breaking condition 
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new; // $_temp variable is temporary 
    $old = $new; 
    $new = $_temp;

    fibonacciStaticVariable($old, $new, $end);
}

fibonacciStaticVariable(0, 1, 15);