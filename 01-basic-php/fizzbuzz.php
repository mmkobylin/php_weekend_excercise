<?php 

require __DIR__ . "/vendor/autoload.php";

for ($i = 0; $i <= 100; $i += 1) {
    $output = "";
    
    if ($i % 3 === 0 && $i % 5 === 0 ) {
        $output = 'FizzBuzz';
    }
    elseif ($i % 3 === 0) {
        $output = 'Fizz';
    }
    elseif ($i % 5 === 0) {
        $output = 'Buzz';
    }
    else {
        $output = $i;
    }
    dump($output);
};