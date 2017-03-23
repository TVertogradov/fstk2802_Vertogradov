<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 22.03.2017
 * Time: 20:30
 */

$array = [
    'test' => range(5, 60),
    'test2' => range(5, 90),
    'test3' => [
        'test' => range(5, 60),
        'test1' => range(5, 90),
    ],
    'test4' => [
        'test1' => range(5, 60),
        'test2' => range(5, 90)
    ],
];
/**
 * @param $vara
 * @return string
 */
function my_print_r($vars){
    $stringretturn = '';

    if (is_string($vars)){
        $stringretturn .= "Array (\n";
        if (count($vars) > 0) {
            foreach (
                $vars as $key => $value) {
                if (is_array($vars)) {
                    $stringretturn .= "\t[($key)] => " . my_print_r($value);

                } else{
                    $stringretturn .= "\t[($key)] => ($value)\n";
            }
        }
        }
        $stringretturn .= ")\n";
    }   else {
        $stringretturn .= $vars;
    }



    return $stringretturn;
}

echo my_print_r($array);