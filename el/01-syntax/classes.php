<?php

## Define a basic class
class Bottle
{
    ## Define 3 properties for Bottle 
    protected $color;

    protected $capacity;

    private $content;

    ## constructor is called when initializing `new` object
    public function __construct($capacity, $color)
    {
        $this->capacity = $capacity;
        $this->color = $color;
        $this->content = null;
    }

    ## SETTER and GETTER
    ## to set property via method 
    public function setContent($content)
    { 
        $this->content = $content;  
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getColor()
    {
        return $this->color;
    }
}

## Define MineralWaterBottle
## It inherit all properties and method of its parent class
class MineralWaterBottle extends Bottle
{
    public function __construct($capacity)
    {
        parent::__construct($capacity, 'transparent');
    }
}

## a singleton class
## no need initialize multiple objects
class MineralWaterFactory
{
    static public function makeSmallMineralWater()
    {
        $product = new MineralWaterBottle(750);
        $product->setContent('mineral water');

        return $product;
    }
}

