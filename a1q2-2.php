<?php

 $start = filter_input(INPUT_POST, 'start', FILTER_VALIDATE_INT);
 $end = filter_input(INPUT_POST, 'end', FILTER_VALIDATE_INT);


if ($start === false || $start === null || $end === false || $end === null)
    echo "Invalid input. Enter a number";
else if($start < 1 || $end < 1) 
    echo "Enter a number greater than 0";
else if($start > $end)
    echo "Start number must be less than or equal to end number";
else{
    // first 15 prime numbers excluding 2
    $primes = [3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53];
    $list = [];

    for($i = $start; $i <= $end; $i++){
        if(in_array($i, $primes)){
            array_push($list, $i); 
        } 
    }
}
    

if (count($list) === 0)
    echo "All numbers have been crossed out!";
else
    echo implode(', ', $list);

?>
