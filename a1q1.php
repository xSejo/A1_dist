<?php

# Your solution here!
$input = filter_input(INPUT_GET, 'ants', FILTER_SANITIZE_STRING);
$str = str_replace('X', '', $input);

$validateInput = str_replace('R', '', $input);
$validateInput = str_replace('B', '', $validateInput);
$validateInput = str_replace('X', '', $validateInput);

if($input === null || $input === false || $validateInput !== ''){
    echo "Invalid input. Enter strings of R, B, and X only.";
}
else{
    while (str_contains($str, 'BR')) {
        $str = str_replace('BR', '', $str);
    }

    $redCrossed = str_contains($str, 'R');
    $blackCrossed = str_contains($str, 'B');

    if($redCrossed && $blackCrossed){
        echo "M.A.D";
    } else if($redCrossed && !$blackCrossed){
        echo "Red Wins";
    } else if(!$redCrossed && $blackCrossed){
        echo "Black Wins";
    } else {
        echo "Neither";
    }

}
?>
