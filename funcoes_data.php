<?php

//date = Y - m - d
$data = date("d-m-Y H:i");

//strtotime

$data_inicial = "2019-09-12";
$data_final = "2030-09-12";


$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferença_time = $time_final - $time_inicial;

$diasegundos = 24*60*60;
$diferença_dias = $diferença_time / $diasegundos;
echo $diferença_dias;

?>