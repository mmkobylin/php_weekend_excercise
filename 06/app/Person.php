<?php

namespace App;

class Person 
{
    private $first; 
    private $last; 

    public function __construct(string $first, string $second) 
    {
        $this->first = $first; 
        $this->second = $second;
    }

    public function fullName() 
    {
       
        return "{$this->first} {$this->second}";
    }

    public function sayHelloTo($person)
    {
        return "Hello {$person->fullName()}";
    }
}