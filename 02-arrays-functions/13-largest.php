<?php

require __DIR__ . "/vendor/autoload.php";

// … your function here

function largest($array){

    $bigNum = $array[0];

    foreach($array as $number){

        if ($number > $bigNum) {
            $bigNum = $number;
        }        
    }

    return $bigNum;
}


dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);