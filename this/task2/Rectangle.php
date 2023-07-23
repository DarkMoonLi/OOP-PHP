<?php

class Rectangle
{
    public float $width;
    public float $height;
    public function setWidth(float $width): void
    {
        if ($width > 0) {
            $this->width = $width;
        }
    }
    public function setHeight(float $height): void
    {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    public function getSquare(): float
    {
        return $this->width * $this->height;
    }
    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }
}