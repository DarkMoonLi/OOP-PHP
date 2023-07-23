<?php

class Employee
{
    public string $name;
    public int $age;
    public float $salary;
    public function getName(): void
    {
        echo $this->name . "\n";
    }
    public function getAge(): void
    {
        echo $this->age . "\n";
    }
    public function getSalary(): void
    {
        echo $this->salary . "\n";
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