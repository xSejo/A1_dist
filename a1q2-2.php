<?php

function primeFactors($start, $end){
    $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
    $primeFactor = [];

    foreach($primes as $prime){
        if($start % $prime === 0 || $end % $prime === 0){
            array_push($primeFactor, $prime);
        }
    }
    return $primeFactor;
} 

$start = filter_input(INPUT_POST, 'start', FILTER_VALIDATE_INT);
$end = filter_input(INPUT_POST, 'end', FILTER_VALIDATE_INT);


if ($start === false || $start === null || $end === false || $end === null)
    echo "Invalid input. Enter a number";
else if ($start < 0 || $end < 0 || $start > 100 || $end > 100)
    echo "Start and end numbers must not be negative or greater than 100.";
else if($start > $end) 
    echo "Start number must be less than or equal to end number";
else {
    
}
    

if (count($list) === 0)
    echo "All numbers have been crossed out!";
else
    echo implode(', ', $list);

?>
