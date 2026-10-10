<?php
/**
 * I Joseph Perez, 000977171, certify that this material is my original work. No other person's work has been used without suitable acknowledgment and I have not made my work available to anyone else.
 *
 * @author Joseph Perez
 * @version 202635.00 
 * @package COMP 10260 Assignment 1
 */

// Since we haven't covered this in php yet, im citing these.
// str_replace method - https://www.php.net/manual/en/function.str-replace.php
// str_contains method - https://www.php.net/manual/en/function.str-contains.php

$input = filter_input(INPUT_GET, 'ants');
$str = str_replace('X', '', $input);

$validateInput = str_replace('R', '', $input);
$validateInput = str_replace('B', '', $validateInput);
$validateInput = str_replace('X', '', $validateInput);

if($input === null || $input === false || $validateInput !== ''){
    echo "Invalid input. Enter characters of R, B, and X only.";
}
else{
    while (strpos($str, 'BR') !== false) { // CHANGED CODE HERE! preg_match is easier to read but this is more consistent since I already used str methods.
        $str = str_replace('BR', '', $str);
    }

    $hasRedCrossed = str_contains($str, 'R');
    $hasBlackCrossed = str_contains($str, 'B');

    if($hasRedCrossed && $hasBlackCrossed){
        echo "M.A.D.";
    } else if($hasRedCrossed && !$hasBlackCrossed){
        echo "Red Wins";
    } else if(!$hasRedCrossed && $hasBlackCrossed){
        echo "Black Wins";
    } else {
        echo "Neither";
    }

}
?>
