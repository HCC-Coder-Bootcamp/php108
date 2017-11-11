<?php

require 'Car.php';

class CarManager
{
    
    static function start()
    {
        $c = new Car('Viva', 30);
        $c->pumpPetrol(12);
        echo $c->getPetrolLevel() . PHP_EOL;
        $c->pumpPetrol(12);
        echo $c->getPetrolLevel() . PHP_EOL;
        $c->pumpPetrol(12);
        echo $c->getPetrolLevel() . PHP_EOL;
        $c->pumpPetrol(12);
        echo $c->getPetrolLevel() . PHP_EOL;
    }
}

CarManager::start();