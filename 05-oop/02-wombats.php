<?php

require __DIR__ . "/vendor/autoload.php";

class Wombat 
{
    private $name; 
    private $hugs = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName() : string
    {   
        return $this->name; 
    }
    public function sayHelloTo(Wombat $wombat) : string
    {
        return "Hello {$wombat->getName()}";
    }
    public function giveHug()
    {
        $this->hugs +=1;
        return $this;
    }
    public function howManyHugs()
    {
        return $this->hugs;
    }
}

$tish = new Wombat("Tish");
$fonny = new Wombat("Fonny");

$tishName = $tish->getName();
dump($tishName); // "Tish"

$greeting = $tish->sayHelloTo($fonny);
dump($greeting); // "Hello Fonny"

$tish->giveHug();
dump($tish->howManyHugs()); // 1

$fonny->giveHug()->giveHug()->giveHug();
dump($fonny->howManyHugs()); // 3
