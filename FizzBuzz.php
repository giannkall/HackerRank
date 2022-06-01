<?php



/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    for($i=1; $i<=$n; $i++){
        if($i%3==0 && $i%5==0){
            print "FizzBuzz";
            print "\n";
        }else if($i%3==0){
            print "Fizz";
            print "\n";
        }else if($i%5==0){
            print "Buzz";
            print "\n";
        }else{
            print $i;
            print "\n";
        }
    }

}

$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);
