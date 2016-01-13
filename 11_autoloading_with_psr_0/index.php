<?php

// Require psr-0 autoloader
require 'autoload.php';

// Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789', 'foo' => 'bar');

// Run validation
$validator = new joostvanveen\app\validator();
if (validator->validate($data, $rules) == true){

    // Create a user in the global namespace
    $joost = new joostvanveen\library\user();
    var_dump($nick);
}
else
{
    //validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}
