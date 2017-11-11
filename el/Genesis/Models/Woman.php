<?php

namespace Genesis\Models;

class Woman extends Human
{
    private $husband;

    public function __construct($name, Man $husband = null)
    {
        parent::__construct($name);
        $this->husband = $husband;
        $this->husband->marry($this);
    }

    public function getName()
    {
        if (is_null($this->husband))
            $initial = 'Miss';
        else
            $initial = 'Mrs';

        return $initial . ' ' . $this->name;
    }
}