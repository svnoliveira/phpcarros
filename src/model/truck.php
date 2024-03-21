<?php

require_once 'car.php';

class Truck extends Car {
    public function __construct(
        string $model,
        string $color,
        int $year,
        private int $cargoSize
    ){
        parent::__construct(
            $model,
            $color,
            $year
        );
    }

    public function getCargoSize() {
        return $this->cargoSize;
    }

    public function getBrand()
    {
        return 'Truck';
    }
};