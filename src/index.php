<?php

$car = 'novo carro';

echo "hello world" . $car;

$newCar = ($car) ?: "sem nome";

$numeros = array('1', 'A', 'b');
$numerosOutraSintaxe = ['a', '1', 'a'];
$numerosOutraSintaxe2 = [
    '0' => 'a',
    '1' => '1',
    '2' => 'a'
];

echo '<br>';
echo print_r($numeros);
echo '<br>';
echo $numeros[2];
echo '<br>';

//8.1 desestruturação
[2 => $terceiro] = $numeros;
echo $terceiro;

[$numero1,, $numero3] = $numeros;
echo '<br>';
echo $numero1 . $numero3;

$corsa = [
    'nome' => 'Corsa',
    'preco' => '9999',
    'marca' => 'Chevrolet',
    'ano' => '2018'
];

echo '<br>';
echo "Carro " . $corsa['nome'] . " do ano " . $corsa['ano'] . " da marca " . $corsa['marca'];
echo '<br>';
$stylus = [...$corsa, 'nome' => 'Stylus', 'marca' => 'Fiat'];

echo "Carro " . $stylus['nome'] . " do ano " . $stylus['ano'] . " da marca " . $stylus['marca'];

foreach ($corsa as $info) {
    echo '<br>';
    echo $info;
}
echo '<br>';
array_push($numerosOutraSintaxe, '4', '22', '51');
echo print_r($numerosOutraSintaxe);
echo '<br>';
$numerosOutraSintaxe[] = '9999';
echo print_r($numerosOutraSintaxe);
echo '<br>';
unset($numerosOutraSintaxe[2]); //deleta indice 'a'
echo print_r($numerosOutraSintaxe);
echo '<br>';
$novoArrayOrdenado = array_values($numerosOutraSintaxe); //reordena indices
echo print_r($novoArrayOrdenado);
echo '<br>';

//class

require_once './model/car.php';
require_once './model/truck.php';

$hb20 = new Car('HB20', 'Blue', 2021);

echo print_r($hb20);
echo '<br>';

// echo $hb20->model . " ";
echo $hb20->getCarAge();
echo '<br>';
echo $hb20->getBrand();
echo '<br>';
$foodTruck = new Truck('foodtruck', 'black', 1992, 500);
echo $foodTruck->getCarAge() . " " . $foodTruck->getCargoSize() . " " . $foodTruck->getBrand();
