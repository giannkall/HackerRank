<?php


/*
 * Complete the 'getMinCost' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY crew_id
 *  2. INTEGER_ARRAY job_id
 */

function getMinCost($crew_id, $job_id) {
    sort($crew_id);
    sort($job_id);
    
    $cost=0;
    if(sizeof($crew_id)==sizeof($job_id)){
        for($i=0; $i<sizeof($crew_id); $i++){
            if($job_id[$i]>=$crew_id[$i]){
                $cost=$cost+($job_id[$i]-$crew_id[$i]);
            }else{
                $cost=$cost+($crew_id[$i]-$job_id[$i]);
            }
        }
    }
    return $cost;

}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$crew_id_count = intval(trim(fgets(STDIN)));

$crew_id = array();

for ($i = 0; $i < $crew_id_count; $i++) {
    $crew_id_item = intval(trim(fgets(STDIN)));
    $crew_id[] = $crew_id_item;
}

$job_id_count = intval(trim(fgets(STDIN)));

$job_id = array();

for ($i = 0; $i < $job_id_count; $i++) {
    $job_id_item = intval(trim(fgets(STDIN)));
    $job_id[] = $job_id_item;
}

$result = getMinCost($crew_id, $job_id);

fwrite($fptr, $result . "\n");

fclose($fptr);
