<?php
/**
 * Created by PhpStorm
 * User: timon
 * Date: 15.03.2017
 * Time: 19:29
 */

$test = 1;
$array = [
    1, 1.2, true, false, 'string',[], new stdClass(), $test
]; // 5.4

$arrayKeys = [
    0 => 1,
    1 => 2,
    3 => 3,
    'my_key' => 'String MY'
];

echo print_r($arrayKeys, true);

$array2 = array();
