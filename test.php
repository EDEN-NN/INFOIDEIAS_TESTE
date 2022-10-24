<?php  

include('funcoes.php');
use SRC\Funcoes;

$test = new Funcoes();

$seculo = $test->SeculoAno(2022);

echo 'função SeculoAno' . PHP_EOL;
var_dump($seculo);

$numero = $test->PrimoAnterior(10);

echo 'funcao NumerosPrimos' . PHP_EOL;
var_dump($numero);

echo 'funcao array' .PHP_EOL;
$array = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
$number = $test->SegundoMaior($array);
var_dump($number);

echo 'funcao array2' . PHP_EOL;
$array2 = [1, 3, 2, 1];
$result = $test->SequenciaCrescente($array2);
var_dump($result); 