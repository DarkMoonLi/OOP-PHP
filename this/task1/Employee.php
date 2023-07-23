<?php

class Employee
{
    public string $name;
    public int $age;
    public float $salary;
    public function getName(): string
    {
        return $this->name;
    }
    public function getAge(): float
    {
        return $this->age;
    }
    public function getSalary(): float
    {
        return $this->salary;
    }
    public function checkAge(): bool
    {
        if ($this->age > 18)
        {
            return true;
        } else {
            return false;
        }
    }
}