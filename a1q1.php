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
// preg_match method - https://www.php.net/manual/en/function.preg-match.php and https://stackoverflow.com/questions/12411037/how-do-i-make-this-preg-match-case-insensitive


$input = filter_input(INPUT_GET, 'ants');
$str = str_replace('X', '', $input);

$validateInput = str_replace('R', '', $input);
$validateInput = str_replace('B', '', $validateInput);
$validateInput = str_replace('X', '', $validateInput);

if($input === null || $input === false || $validateInput !== ''){
    echo "Invalid input. Enter characters of R, B, and X only.";
}
else{
    while (preg_match('/BR/i', $str)) { 
        $str = str_replace('BR', '', $str);
    }

    $hasRedCrossed = preg_match('/R/i', $str);
    $hasBlackCrossed = preg_match('/B/i', $str);

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
