<?php

$start = filter_input(INPUT_POST, 'start', FILTER_VALIDATE_INT);
$end = filter_input(INPUT_POST, 'end', FILTER_VALIDATE_INT);

// first 15 prime numbers excluding 2
$primes = [3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53];
$list = [];

for($i = $start; $i <= $end; $i++){
    if(in_array($i, $primes)){
        array_push($list, $i); 
    } 
}
?>
