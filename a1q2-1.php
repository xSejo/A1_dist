<?php
    function getFactors($number){
        $factors = [];

        for($divisor = 1; $divisor <= $number; $divisor++){     
            if($number % $divisor === 0){
                array_push($factors, $divisor);
            }
        }
        return $factors;
    }

    $number = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);
    
    if ($number === false || $number === null)
        echo "Invalid input. Enter a number";
    else if($number < 1) 
        echo "Enter a number greater than 0";
    else 
        echo implode(', ', getFactors($number));
?>
