<?php

/* 
foreach>later 
for 
while 
do while
goto 
*/

// How to find out even number between 1 to 100
echo "How to find out even number between 1 to 100 \n";
for ($i = 2; $i <= 10; $i+=2){
    echo "$i \n";
}

// How to find out odd number between 1 to 100
echo "How to find out odd number between 1 to 100 \n";
for($i = 1; $i <= 10; $i+=2){
    echo "$i \n";
    
}
echo PHP_EOL;
for($i = 1; $i <= 10; $i++){
    echo PHP_EOL;
    for($j=0; $j<$i; $j++){
        echo "*";
    }
}
echo PHP_EOL;
// while loop 
echo "While loop \n";
$i = 0;
while($i < 10){
    $i++;
    echo "$i \n";
}
echo PHP_EOL;
// do while 
echo "Do while loop \n";
$i = 0;
do{
    $i++;
    echo "$i \n";
}while($i<10);

// go to 
echo "Goto loop \n";

$i = 0;
a: $i++;
echo PHP_EOL;
if($i<10) goto a;

echo PHP_EOL;
// Multiple stepping 
echo "Multiple stepping";
echo PHP_EOL;
for($i=10; $i > 0; $i-=1){
    echo $i;
    echo PHP_EOL;
}

for($i=10; $i > 0; $i-=1){
    echo $i.":".(11-$i);
    echo PHP_EOL;
}
echo PHP_EOL;

for($i=10, $j=1; $i > 10; $i-=1, $j++){
    echo $i.":".$j;
    echo PHP_EOL;
}