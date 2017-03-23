<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 22.03.2017
 * Time: 19:12
 */

//$a = 'test';
//$b = 'a';
//echo $$b;
//echo $($b);

const TEST = 3;
$a = 23423;

function name_function(...$var){

}


$my_function = function ($b) use($a){
    echo PHP_EOL . 'test' . $a . $b;
};

echo $my_function('Hello');

echo name_function(1,2,3,4,5,6,7,8,9,0);