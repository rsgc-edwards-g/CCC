<?php

// Open the standard input
$f = fopen("php://stdin", "r");

$length = fgets($f);
$array = array();

for ($i = 0; $i < $length; $i++){
    $new = fgets($f);
    if ($new == 0){
        array_pop($array);
    } else {
        array_push($array, $new);
    }
}

// close the input
fclose($f);

$length_final = count($array);
$result = 0;
for ($i = 0; $i < $length_final; $i++){
    $result += $array[$i];
}

print($result);

?>