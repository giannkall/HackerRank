
<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $dia1=0;
    $dia2=0;
    $number = sizeof($arr)-1;
    for($i=0; $i<sizeof($arr); $i++){
        $dia1+=$arr[$i][$i];
        $dia2+=$arr[$i][$number-$i];
    }
    if($dia1>=$dia2){
        return $dia1-$dia2;
    }else{
        return $dia2-$dia1;
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
