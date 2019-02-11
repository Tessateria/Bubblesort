<?php

$inputList = array(5, 81, 12, 1, -5, 54);

for ($i = 0; $i <= count($inputList)-1; $i++){

    for ($j = count($inputList)-1; $j >= $i+1; $j--){
        if ($inputList[$j] < $inputList[$j-1]){
            $tmp = $inputList[$j];
            $inputList[$j] = $inputList[$j-1];
            $inputList[$j-1] = $tmp;
            }
    }
}
print_r($inputList);