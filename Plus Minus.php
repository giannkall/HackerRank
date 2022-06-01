<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $c[0]=0;
    $c[1]=0;
    $c[2]=0;
    for($i=0; $i<sizeof($arr); $i++){
        if($arr[$i]>0){
            $c[0]++;
        }else if($arr[$i]<0){
            $c[1]++;
        }else{
            $c[2]++;
        }
    }
    $c[0]=$c[0]/sizeof($arr);
    $c[1]=$c[1]/sizeof($arr);
    $c[2]=$c[2]/sizeof($arr);
    print $c[0];
    print "\n";
    print $c[1];
    print "\n";
    print $c[2];
    print "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
