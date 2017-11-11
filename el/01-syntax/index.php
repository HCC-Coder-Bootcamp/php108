<?php

require 'classes.php';

// make myself a blue bottle

$myBottle = new Bottle(1000, 'blue');
echo $myBottle->getColor() . PHP_EOL;


// ask factory to make a small mineral water

$mineralWaterA = MineralWaterFactory::makeSmallMineralWater();
echo $mineralWaterA->getContent() . PHP_EOL;