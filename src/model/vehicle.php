<?php

abstract class Vehicle {
    public function __construct(
        protected string $model,
        protected string $color,
        protected string $year,
    )
    {
    }
    abstract public function getCarAge();
    abstract public function getBrand();
    abstract public function getColor();
    abstract public function setColor(string $color);
    abstract public function getYear();
}