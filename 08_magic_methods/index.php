<?php


// requere app files
require 'app/user.php';
require 'app/validator.php';
require 'app/helper.php';

// Set data and validator rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8);
$data = array(\'email\' => \'joost@tutsplus.com\', \'password\' => \'12346789\', \'foo\' => \'bar\');

// Run validator
$validator = new Validator();
if ($validator->validate($data, $rules) == true) {

// validation passed. set user values.
  $joost = new User ($data);


    $joost->email = 'someotheremail@tutsplus.com';
   $joost->password = 'sadfsadfsad';

     // var_dump($joost->email);
     // var_dump($joost->password);

     // Dump user
     // var_dump($joost);

     echo $joost;
     }
     else {

     // validation failed. Dump validation errors.
     var_dump($validator->getErros());
     }


