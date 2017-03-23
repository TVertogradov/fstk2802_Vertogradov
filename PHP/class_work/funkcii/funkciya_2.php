<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 22.03.2017
 * Time: 19:50
 */

$array = range(5, 100, 5);
$returnArray = array_filter($array, function ($item) {
    //$istrue =$item > 50 ? true : false;
    return $item > 50;
});

/**
 * @param $item
 * @return bool
 */

function callBackFunck($item){
    return $item > 50;
}


/**
 * @param array $array
 * @param  callable $functionCallback
 * @return array
 */

function may_array_filter($array, $functionCallbac = null)
{
    $returnArray = [];
    foreach ($array as $item){
        if (!empty($functionCallback) && is_callable($functionCallback)){
            if($functionCallback($item)) {
                $returnArray[] = $item;
            }
        }

    }
    return $returnArray;
}

;

echo print_r($returnArray, true);