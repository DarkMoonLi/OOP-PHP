<?php
 require_once "Employee.php";

 $employee = new Employee();

 $employee->name = 'Maxim';
 $employee->age = 21;
 $employee->salary = 30000.50;

 $employee->getName();
 $employee->getAge();
 $employee->getSalary();

 if($employee->checkAge())
 {
     echo $employee->getName() . 'старше 18 лет';
 }