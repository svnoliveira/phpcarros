<?php

require_once 'vehicle.php';

class Car extends Vehicle {
    // private string $model;
    // private string $color;
    // private int $year;
    private array $brand;

    public function __construct(
        string $model,
        string $color,
        int $year) {
        // $this->model = $model;
        // $this->color = $color;
        // $this->year = $year;
        parent::__construct(
            $model,
            $color,
            $year
        );
        $this->brand = [
            'HB20' => 'Hyundai',
            'civic' => 'Honda',
            'X1' => 'BMW'
        ];
    }

    public function getColor() {
        $this->color;
    }

    public function setColor(string $cor) {
        $this->color = $cor;
    }

    public function getCarAge() {
        //current year
        $date = new DateTime('now');

        return $date->format('Y') - $this->year;
    }

    public function getBrand() {
        return $this->brand[$this->model];
    }

    public function getYear()
    {
        return $this->year;
    }
};