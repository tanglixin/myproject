<?php
function romanToInt($s) {
    if ($s == ''){
        return false;
    }

    $romanInt = ['I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000];

    $len = strlen($s);

    $int = 0;
    for ($i = 0; $i < $len; $i++){
        if (!isset($s[$i])){
            return false;
        }

        $l = substr($s,$i,1);
        $r = substr($s,$i+1,1);
        if ($i == $len-1){
            $int += $romanInt[$l];
        }else{
            if ($romanInt[$l] >= $romanInt[$r]){
                $int += $romanInt[$l];
            }else{
                $int += $romanInt[$r] - $romanInt[$l];
                $i++;
            }
        }
    }

    if ($int < 1 || $int > 3999){
        return false;
    }
    return $int;
}

$roman = 'III';
echo romanToInt($roman);