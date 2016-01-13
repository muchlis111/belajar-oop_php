<?php

// Require psr-0 autoloader
require 'autoload.php';

// Set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutsplus.com', 'password' => '12346789', 'foo' => 'bar');

//Run validation
$validator = new acme\app\vaildator();
if ($validator->validate($data, $rules) == true) {

    $joost = new acme\app\administrator();
    echo $joost->login();

}
else {
    //vaidation failed. Dump validation errors.
    var_dump($validator->getErrors());
}