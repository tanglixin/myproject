<?php
$nums = [2, 7, 11, 15];
$target = 26;
function twoSum($nums,$target){
    $count = count($nums);
    if ($count < 2){
        return [];
    }

    for ($i = 0; $i < $count; $i++){
        for ($j = $i+1; $j < $count; $j++){
            if ($nums[$i] + $nums[$j] == $target){
                return [$i,$j];
            }
        }
    }

    return [];
}