<?php

function getPrimeFactors($start, $end){
    $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
    $activeFactors = [];

    foreach($primes as $prime){
        if($start % $prime === 0 || $end % $prime === 0){
            array_push($activeFactors, $prime);
        }
    }
    return $activeFactors;
} 

function hasSharedFactors($number, $primeFactors){
    foreach($primeFactors as $factor){
        if($number % $factor === 0){
            return true;
        }
    }
    return false;
}

$start = filter_input(INPUT_POST, 'start', FILTER_VALIDATE_INT);
$end = filter_input(INPUT_POST, 'end', FILTER_VALIDATE_INT);


if ($start === false || $start === null || $end === false || $end === null){
    echo "Invalid input. Enter a number";
} else if ($start < 0 || $end < 0 || $start > 100 || $end > 100){
    echo "Start and end numbers must not be negative or greater than 100.";
} else if($start > $end) {
    echo "Start number must be less than or equal to end number";
} else {
    $factors = getPrimeFactors($start, $end);
    $list = [];

    for($number = $start; $number <= $end; $number++){
        if(!hasSharedFactors($number, $factors)){
            array_push($list, $number);
        }
    }
    if (count($list) === 0)
        echo "All numbers have been crossed out!";
    else{
        echo "<ul>";
            foreach($list as $number){
                echo "<li>$number</li>";
            }
        echo "</ul>";
    }
}
?>
