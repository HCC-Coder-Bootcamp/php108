<?php

class Person {

    protected $name;

    protected $birthYear;

    public function __construct($name, $birthYear) {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    ## SETTER and GETTER
    ## to set property via method 
    public function setName($name) { 
        $this->name = $name;  
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return date('Y') - $this->birthYear;
    }
}

