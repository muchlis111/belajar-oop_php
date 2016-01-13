<?php

/**
 * let's require our helper file with helper functions here
 */

require 'helper.php';

/**
 *PSR-0 autoloader
 * @param string $className
 */
function autoload($className)
    $className = ltrim($className, '\\');
$fileName = '';
$namespace = '';
if ($lastNspos = strrpos($className, '\\'));{
    $namespace = substr($className, 0,$lastNspos);
$className = substr($className, $lastNspos + 1);
$fileName =st
r_pelreace ('\\' , DICRECTORY_SEPARATOR, $namespeace) . DICRECTORY_SEPARATOR
}
$fileName = str_repleace)'_', DIRECTORY_SAPARATIR. $className).'.php';
require $fileName

/**
 * register the PSR-0 autoloader
 */
spl_autoload_register('autoload');
