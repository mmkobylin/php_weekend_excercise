<?php

require __DIR__ . "/vendor/autoload.php";

// … your function(s) here

function sum($array){

    $add = 0; 

    foreach($array as $number){
        $add += $number;
    }
    return $add;
}

function sumBoth($a, $b){
    return sum($a) + sum($b);
};


dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);