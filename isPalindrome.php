<?php
$num = 21512;

function isPalindrome($x) {
    if ($x < 0){
        return false;
    }
    $len = strlen($x);

    for ($i = 0; $i < floor($len/2); $i++){
        if (substr($x,$i,1) != substr($x,$len-$i-1,1)){
            return false;
        }
    }

    return true;

}

$res = isPalindrome($num);
var_dump($res);