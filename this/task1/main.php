<?php
 require_once "Employee.php";

 $employee = new Employee();

 $employee->name = 'Maxim';
 $employee->age = 21;
 $employee->salary = 30000.50;

 echo $employee->getName() . "\n";
 echo $employee->getAge() . "\n";
 echo $employee->getSalary() . "\n";

 if($employee->checkAge())
 {
     echo $employee->getName() . ' старше 18 лет' . "\n";
 }

 $first_employee = new Employee();
 $first_employee->name = 'Andru';
 $first_employee->age = 22;
 $first_employee->salary = 31000.50;

 $second_employee = new Employee();
 $second_employee->name = 'John';
 $second_employee->age = 25;
 $second_employee->salary = 60000.50;

 echo 'Сумма зарплат: ' . ($first_employee->getSalary() + $second_employee->getSalary());