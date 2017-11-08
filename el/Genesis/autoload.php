<?php 
/**
 * define autoloader
 */

function __autoload($className)
{
    $path = '../' . $className . '.php';
    $path = str_replace('\\', '/', $path);

    if (file_exists($path)) { 
        require_once $path; 
        return true; 
    } 

    return false; 
} 
