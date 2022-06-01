<?php



/*
 * Complete the 'findSum' function below.
 *
 * The function is expected to return a LONG_INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY numbers
 *  2. 2D_INTEGER_ARRAY queries
 */

function findSum($numbers, $queries) {
    $j=0;
    
        while($j<sizeof($queries)){
                $sum[$j]=0;
        for($i=$queries[$j][0]-1; $i<$queries[$j][1]; $i++){
            $sum[$j]+=$numbers[$i];
            if($numbers[$i]==0){
                $sum[$j]+=$queries[$j][2];
            }
        }
         $j++;
    }
        return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$numbers_count = intval(trim(fgets(STDIN)));

$numbers = array();

for ($i = 0; $i < $numbers_count; $i++) {
    $numbers_item = intval(trim(fgets(STDIN)));
    $numbers[] = $numbers_item;
}

$queries_rows = intval(trim(fgets(STDIN)));
$queries_columns = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $queries_rows; $i++) {
    $queries_temp = rtrim(fgets(STDIN));

    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = findSum($numbers, $queries);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
