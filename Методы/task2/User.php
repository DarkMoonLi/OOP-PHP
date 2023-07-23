<?php

namespace task2;

class User
{
    public string $name;
    public int $age;
    public function show(string $data): void
    {
        echo $data . '!!!';
    }
}