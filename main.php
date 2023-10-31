<?php

function rotLeft($arr, $d) {
    $n = count($arr);
    // Calculate the effective number of rotations needed
    $rotations = $d % $n;

    $rotatedArray = [];

    for ($i = $rotations; $i < $n; $i++) {
        $rotatedArray[] = $arr[$i];
    }

    for ($i = 0; $i < $rotations; $i++) {
        $rotatedArray[] = $arr[$i];
    }

    return $rotatedArray;
}

// Input
$d = 4;
$array = [1,2,3,4,5];

// Perform left rotations
$result = rotLeft($array, $d);

// Print the rotated array
print_r($result);

?>