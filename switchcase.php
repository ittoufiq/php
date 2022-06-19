<?php

// Find out odd even number using switch case method 

$n = 13;
$r = $n % 2;

switch($r){
    case 0:
    echo "{$n} is even number \n";
    break;
    default:
    echo "{$n} is odd number \n";
}

// Multiple case testing using switch case 

$color = 'red';

switch($color){
    case 'red':
        echo ucwords($color)." is our favourite color";
        break;
    case 'green':
        echo ucwords($color)." is our favourite color";
        break;
    case 'blue':
        echo ucwords($color)." is our favourite color";
        break;
        default:
        echo "We don't about this {$color}";
}
