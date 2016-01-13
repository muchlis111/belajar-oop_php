<?php

// Require psr-0 autoloader
require 'autoload.php';

//set data and validation rules
$rules = array('email'=> 'requered|email', 'password' => 'required');
$data = array('email' => 'joost@tutsplus.com', 'passord', 'foo' => 'bar');

//Run validation
$validator = new acme\app\validator();
if ($validator->validate($data, $rules) == true) {

    $member = new acme\app\member();
        echo $member->login();
    // $administrator = new acme\app\administrator();
    // echo $administrator->login();
}
else {
    //validation failed. Dump validation errors.
    var_dump($validator->getErrors());
}