<?php

// PHP variable value is changeable. Constant value is not  changeable

// How to check constant variable 

// How to change php variable value 

$task = 'read';
echo $task;

echo "\n";

$task = 'write';
echo $task;

echo "\n";

// How to use constant variable 

define('greetings', 'Hello World');

echo constant('greetings');

// alternative ways 
echo "\n"; 

$const = 'constant';

echo "This value is constant {$const('greetings')}";