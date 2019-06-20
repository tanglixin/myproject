<?php
$x=-1200;
function reverse($x) {
    $num = abs($x);
    $len = strlen($x);

    if ($len < 2){
        return $x;
    }


    $revnum = '';
    for ($i=$len-1;$i>=0;$i--){
        $revnum .= substr($num,$i,1);
    }
    $revnum = intval($revnum);
    if ($x<0){
        $revnum = -$revnum;
    }

    if ($revnum < -2147483648 || $revnum > 2147483647){
        return 0;
    }
    return $revnum;
}

echo reverse($x);