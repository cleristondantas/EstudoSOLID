<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__  . '/vendor/autoload.php';

use Auto\Motocicleta;
use Auto\Carro;
use Auto\formatos\ExtratoJson;
use Auto\formatos\ExtratoXML;


$motocicleta = new Motocicleta;

$index = $motocicleta->setVeiculo(2, 180, 2);

$motocicleta->multas($index, array('valor' => 900, 'tipo' => 'Passou no pardal'));
$motocicleta->multas($index, array('valor' => 1000, 'tipo' => 'Falando no celular'));


// $extrato = new ExtratoJson;
$extrato = new ExtratoXML;
// echo $extrato->formato($motocicleta, 0);


$carro = new Carro;
$index = $carro->setVeiculo(4, 200, 5);
$carro->multas($index, array('valor' => 83, 'tipo' => 'Estacionou no canteiro central'));
$carro->multas($index, array('valor' => 83, 'tipo' => 'Estacionou no canteiro central'));

// echo $extrato->formato($carro, 0);
echo "<pre>" . $extrato->formato($carro, 0) . "</pre>";
