<?php

include 'arr.php';

// for, while, do while, foreach

for ($i = 0; $i < 5; $i++){
    $array['sgfd'] = $i;
    $array[] = $i;

}

echo print_r($array, true);