<?php

require 'Person.php';

class PersonManager
{
    
    static function start()
    {
        $p = new Person('Elliot', 1986);
        echo $p->getAge(). PHP_EOL;
    }
}

PersonManager::start();