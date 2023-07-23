<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'Rectangle.php';

//First part of task
$user = new User();
$user->setName('John');
$user->setAge(25);
echo 'Возраст ' . $user->getName() . '=' . $user->getAge() . "\n";
$user->setAge(30);
echo 'Возраст ' . $user->getName() . '=' . $user->getAge() . "\n";
$user->setAge(15);
echo 'Возраст ' . $user->getName() . '=' . $user->getAge() . "\n";
$user->setAge(18);
echo 'Возраст ' . $user->getName() . '=' . $user->getAge() . "\n";

//Second part of task
$employee = new \task2\Employee();
$employee->name = 'Maxim';
$employee->salary = 23000.1;
echo "Double salary = " . $employee->doubleSalary() . "\n";

//Third part of task
$rectangle = new Rectangle();
$rectangle->setWidth(10);
$rectangle->setHeight(20);
echo 'Perimeter = ' . $rectangle->getPerimeter() . "\n";
echo 'Square = ' . $rectangle->getSquare() . "\n";