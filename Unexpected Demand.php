<?php



/*
 * Complete the 'filledOrders' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY order
 *  2. INTEGER k
 */

function filledOrders($order, $k) {
    $sum=0;
    sort($order);
    for($i=0; $i<sizeof($order); $i++){
        if($order[$i]<=$k){
            $sum+=1;
            $k = $k - $order[$i];
        }
    }
    return $sum;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$order_count = intval(trim(fgets(STDIN)));

$order = array();

for ($i = 0; $i < $order_count; $i++) {
    $order_item = intval(trim(fgets(STDIN)));
    $order[] = $order_item;
}

$k = intval(trim(fgets(STDIN)));

$result = filledOrders($order, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
