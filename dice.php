<?php

$numbers = [];
$iterations = 3;

for ($i =0;  $i < $iterations;$i++){
    $numbers[]= random_int (1, 6)
}

$n =random_int(1, 6);
 
foreach( $numbers as $number){
    echo "-un $number<br>\n";
}



echo "vous tiré un $n<br>\n";