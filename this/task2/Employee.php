<?php

namespace task2;
class Employee
{
    public string $name;
    public float $salary;
    public function doubleSalary(): float
    {
        return 2 * $this->salary;
    }
}