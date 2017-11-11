<?php

namespace Genesis\Models;

class Human extends Thing
{
    function __construct($name)
    {
        Parent::__construct($name);

        echo ' * a new human name "' . $name  . '" is created!' . PHP_EOL;
    }
}