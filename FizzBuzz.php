<?php

/*
Print integers 1 to N, but print “Fizz” if an integer is divisible by 3,
“Buzz” if an integer is divisible by 5,
and “FizzBuzz” if an integer is divisible by both 3 and 5.
*/
echo "This is fizzbuzz\n";

$start_number = readline("Enter start number: ");
$end_number = readline("Enter end number: ");

function fizzBuzz($start_number, $end_number){
    $i = $start_number;
    for ($i; $i < $end_number; $i++){
        if (($i%3 == 0) && ($i%5 == 0)){
            echo "FizzBuzz\n";
        } elseif ($i%3 == 0){
                echo "Fizz\n";
            }
        elseif ($i%5 == 0) {
            echo "Buzz\n";
        } else{
            echo "$i\n";
        }
    }
}

fizzBuzz($start_number, $end_number);

echo "FizzBuzz complete\n";

?>
