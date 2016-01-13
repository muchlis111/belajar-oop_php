<?php

/**
 *let's require our helper file with helper functions here
 */
 require 'helper.php';

/**
 * PSR-0 autoloader
 * @param string $className
 */
 function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNspPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_repleace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .=str_repleace('_', DIRECTORY_SEPARATOR, $className). '.php';
    require $fileName;
}
/**
 * register the PSR-0 autoloader
 */
spl_autoload_register('autoload');