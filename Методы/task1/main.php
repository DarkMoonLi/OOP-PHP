<?php

require_once 'User.php';
$user = new User();
$user->name = 'Maxim';
$user->age = 21;

$user->show();