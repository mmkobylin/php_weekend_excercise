<?php

require __DIR__ . "/vendor/autoload.php";

// … collect()/all() version;

// function squares($arrOfNum){

//     return $square = collect($arrOfNum)->map(fn($n)=> $n * $n)->all();
// }

function squares($arrOfNum){

    $empty = [];
    
    foreach($arrOfNum as $num){
        $empty[] = $num * $num;
    }

    return $empty;
}

dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);