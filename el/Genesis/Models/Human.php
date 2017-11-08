<?php

namespace Genesis\Models;

class Human
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;

        echo ' * a new human name "' . $name  . '" is created!' . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

}