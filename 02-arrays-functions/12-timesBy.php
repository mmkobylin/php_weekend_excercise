<?php

require __DIR__ . "/vendor/autoload.php";

// … your function here
function timesBy($array, $multi){
    
    $empty = [];
    
    foreach($array as $numbers){
        $empty[] = $numbers * $multi;
    }

    return $empty;
}

dump(
    timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
    timesBy([2, 3, 4], 5), // [10, 15, 20]
    timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
    timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
);