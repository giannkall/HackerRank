<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    $count=0;
    sort($a);
    for($i=0; $i<sizeof($a); $i++){
        if($i==0 && $a[$i+1]!=$a[$i]){
            return $a[$i];
        }
        if($i!=0){
        if($a[$i-1]!=$a[$i] && $a[$i+1]!=$a[$i]){
            return $a[$i];
        }
        }
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
