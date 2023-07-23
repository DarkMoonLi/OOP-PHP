<?php

class User
{
    public string $name;
    public int $age;
    public function setAge(int $age): void
    {
        if ($age >= 18)
        {
            $this->age = $age;
        }
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}