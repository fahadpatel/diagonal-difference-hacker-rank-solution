<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    $n=count($arr);
    $diagonal_1=0;
    $diagonal_2=0;
    for($i=0; $i<$n; $i++){
      $diagonal_1=$diagonal_1+$arr[$i][$i]; 
    }
    
    $j=$n;
     for($i=0; $i<$n; $i++){
       $j--;
      $diagonal_2=$diagonal_2+$arr[$i][$j]; 
    }
    return abs($diagonal_1-$diagonal_2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
