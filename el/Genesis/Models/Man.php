<?php

namespace Genesis\Models;

class Man extends Human
{
    protected $wife;

    public function getName()
    {
        return 'Mr. ' . $this->name;
    }

    public function marry(\Genesis\Models\Woman $woman)
    {
        $this->wife = $woman;
        echo ' * Sweet! ' . $this->getName() . ' has married ' . $this->wife->getName() . PHP_EOL;
    }

    public function getWife()
    {
        return $this->wife;
    }
}