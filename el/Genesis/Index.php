<?php

/**
 * Namespace
 * We usually follow the folder name and structure
 * so the autoloading can work
 */

namespace Genesis;

/**
 * Autoload
 * Whenever you call a class, it find the class php file base on class name
 */
require 'autoload.php';


/**
 * Use class by namespace
 * After these lines, you call `Planet` class, it refer as
 * `Genesis\Models\Planet` class
 */
use Genesis\Models\Planet;
use Genesis\Models\Man;
use Genesis\Models\Woman;


/**
 * the story begin
 * God created the earth
 */
$earth = new Planet('Earth');

/**
 * and He create a man name 'Adam'
 */
$adam = new Man('Adam');

/**
 * He put adam in the earth
 * Earth has Adam and Adam belongs to Earth
 */
$earth->putHuman($adam);


/**
 * and He create a woman name 'Eva' out of 'Adam'
 */
$eva = new Woman('Eva', $adam);


/**
 * He put adam in the earth
 * Earth has Adam Eva
 */
$earth->putHuman($eva);

/**
 * God ask earth : how many human do you have?
 */
echo $earth->name . ' has ' . $earth->getPopulation() . ' human ' . PHP_EOL;

/**
 * God ask adam : who is your wife?
 */
if ($adam->getWife()) {
    echo $adam->getName() . ' : ' . $adam->getWife()->getName() . ' is my wife.' . PHP_EOL;
} else {
    echo $adam->getName() . ' : I\'ve no wife! cry cry...';
}


