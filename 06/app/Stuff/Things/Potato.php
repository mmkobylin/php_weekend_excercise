<?php 

namespace App\Stuff\Things;

class Potato
{
    private $waterd = 0;

    public function water()
    {
        $this->watered += 1;
        return $this;
    }

    public function hasGrown()
    {
        if ($this->watered >= 5) {
            return true;
        } else {
            return false;
        }
    }
}