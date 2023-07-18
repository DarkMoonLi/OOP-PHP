<?php

require_once "Employee.php";

$first_employee = new Employee();
$first_employee->name = "Jhon";
$first_employee->age = 25;
$first_employee->salary = 1000;

$second_employee = new Employee();
$second_employee->name = "Eric";
$second_employee->age = 26;
$second_employee->salary = 2000;

echo "Зарплата обоих сотрудников = " . ($first_employee->salary + $second_employee->salary) . "\n";
echo "Возраст обоих сотрудников = " . ($first_employee->age + $second_employee->age);