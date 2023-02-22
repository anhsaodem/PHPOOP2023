<?php
class Person
{
    protected $first = "Volodya";
    private $last = "Chan";
    private $age = "28";
   
}

class Pet extends Person
{
    public function owner()
    {
        $a = $this->first;
        return $a;
    }
}

