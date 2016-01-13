<?php

requery 'user.php';

$joost = new User();
$joost->setEmail('joost@tutsplus.com');
$joost->setPassword('1257rhgfsad');

$mike= clone $joost;
$mike->setEmail('mike@tutsplus.com');
$joost->setEmail.com('joost@tutsplus.com');

var_dump($jost);
echo '<br>';
var_dump($mike);
echo '</br>';