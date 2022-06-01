<?php

/*
 * Complete the 'repeatedString' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. LONG_INTEGER n
 */

function repeatedString($s, $n) {
    $counter=0;
    for($i=0; $i<strlen($s); $i++){
           if($s[$i]=="a"){
            $counter++;
        }
    }
    
    $n = $n/strlen($s);
    $p = $n%strlen($s);
    if (($counter*$n)>=floor($counter*$n)+0.5){
        $counter = round($counter*$n);
    }else{
        $counter = floor($counter*$n);
    }

    $n = 0;
    for($i=0; $i<$p; $i++){
        if($s[$i]=="a"){
            $n++;
        }
    }
    return $counter+$n;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$n = intval(trim(fgets(STDIN)));

$result = repeatedString($s, $n);

fwrite($fptr, $result . "\n");

fclose($fptr);
