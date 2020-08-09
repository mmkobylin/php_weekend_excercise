<?php 

namespace App\Stuff\Things; 

class Potato 
{
    private $watered = 0;

    public function water() : Potato
    {
        $this->watered += 1;
        return $this;
    }
    public function hasGrown() : bool
    {
        if ($this->watered < 5){
        return false;
        } else {
            return true;
        }
    
    }
}