<?php

namespace Genesis\Models;

class Planet
{
    public $name;

    private $humans;

    public function __construct($name)
    {
        $this->name = $name;

        echo ' * a new world name "' . $name  . '" is begin!' . PHP_EOL;
    }

    public function putHuman(Human $person)
    {
        $this->humans[] = $person;
        echo ' * "' . $person->getName()  . '" has been put in "' . $this->name . '"' . PHP_EOL;
    }

    public function getPopulation()
    {
        return count($this->humans);
    }

}