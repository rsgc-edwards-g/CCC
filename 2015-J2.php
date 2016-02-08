<?php

// Open the standard input
$f = fopen("php://stdin", "r");

// get the line of text given
$input = fgets($f);

// close the input
fclose($f);

// count each emoticon
$numHappy = substr_count($input, ":-)");
$numSad = substr_count($input, ":-(");


if ($numHappy == 0 && $numSad == 0){
    
    print("none\n");
} else if ($numHappy == $numSad) {
    
    print("unsure\n");
} else if ($numHappy > $numSad) {
    
    print("happy\n");
} else {
    
    print("sad\n");
}

?>