<?php

namespace task2;
require_once 'User.php';

$user = new User();
$user->name = 'Maxim';
$user->age = 21;
$user->show('It\'s works');

