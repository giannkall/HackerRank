<?php


/*
 * Complete the 'stringAnagram' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY dictionary
 *  2. STRING_ARRAY query
 */

function stringAnagram($dictionary, $query) {

    for($i=0; $i<sizeof($query); $i++){
            $sum[$i]=0;
        for($j=0; $j<sizeof($dictionary); $j++){
            if(count_chars($query[$i],1)==count_chars($dictionary[$j], 1)){
                $sum[$i]+=1;
            }
        }
    }
    
    return $sum;

}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$dictionary_count = intval(trim(fgets(STDIN)));

$dictionary = array();

for ($i = 0; $i < $dictionary_count; $i++) {
    $dictionary_item = rtrim(fgets(STDIN), "\r\n");
    $dictionary[] = $dictionary_item;
}

$query_count = intval(trim(fgets(STDIN)));

$query = array();

for ($i = 0; $i < $query_count; $i++) {
    $query_item = rtrim(fgets(STDIN), "\r\n");
    $query[] = $query_item;
}

$result = stringAnagram($dictionary, $query);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
