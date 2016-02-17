<?php

$f = fopen("php://stdin", "r");

$num_gates = fgets($f);
$gates = array();
for ($gate = 1; $gate <= $gates; $gate++){
    $gates[$gate] = $gate;
}
$planes = fgets($f);

$result = 0;
$desired_gates = array();
for ($i = 0; $i < $planes; $i++){
    $desired_gates[$i] = fgets($f);
}

for ($plane = 0; $plane < $planes; $plane++){
    $range = $desired_gates[$plane];
    $options = array();
    for ($n = 0; $n < count($gates); $n++){
        if ($gates[$n] <= $range){
            $options[$n] = $gates[$n];
        } else {
            break;
        }
    }
    if (count($options) == 0){
        fclose($f);
        print($result);
        die();
    } else {
        $gate_used = max($options);
        array_pop($gates, $gate_used);
    }
}
fclose($f);
print($result);




?>