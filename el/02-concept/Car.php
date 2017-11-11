<?php

class Car {

    protected $model;
    protected $petrolLevel;
    protected $petrolCapacity;

    public function __construct($model, $capacity) {
        $this->model = $model;
        $this->petrolCapacity = $capacity;
        $this->petrolLevel = 0;
    }

    public function pumpPetrol($liter) {
        $this->petrolLevel += $liter;
        if ($this->petrolLevel > $this->petrolCapacity) {
            $this->petrolLevel = $this->petrolCapacity;
        }
    }

    public function getPetrolLevel()
    {
        return $this->petrolLevel;
    }
}

