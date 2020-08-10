<?php 

namespace App\Library; 

class Book {

    private $title;
    private $pageNumbers;
    private $current = 1;

    public function __construct(string $title, int $pageNumbers)
    {
        $this->title = $title;
        $this->pageNumbers = $pageNumbers;
        return $this;
    }

    public function read(int $number) 
    {
        $this->current += $number;
        return $this;
    }
    public function currentPage()
    {
        return $this->current;
    }
}