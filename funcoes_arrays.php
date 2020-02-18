<?php

//is_array

/*
$array = array('notebook', 'teclado');
$retorno = is_array($array);

if($retorno){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
*/

//in_array

/*$array = array('mac', 'windows', 'linux');
$retorno = in_array('linux', $array);

if($retorno){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
*/

//array_keys

/*
$produtos = array(10 => 'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);
*/

//sort e asort

/*
$frutas = array(0 => 'Banana', 1 => "Amora", 2 => "Carambola");

sort($frutas);
var_export($frutas);

echo "<br><br>";

$frutas1 = array(0 => 'Banana', 1 => "Amora", 2 => "Carambola");

asort($frutas1);
var_export($frutas1);
*/

//count

/*
$frutas = array(0 => 'Banana', 1 => "Amora", 2 => "Carambola");

$itens_array = count($frutas);
echo $itens_array;
*/

//array_merge

/*
$array1 = array('mac', 'linux');
$array2 = array('windows');
$array3 = array('cebola');

$novo_array = array_merge($array1, $array2, $array3);
var_export($novo_array);
*/

//explode
$string = '20/10/2020';
$retorno = explode("/", $string);

//implode

$nova_string = implode("/", $retorno);
echo $nova_string;

?>