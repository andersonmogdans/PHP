<?php

function boas_vindas($nome='indefinido'){
	//código de execução da função
	echo "Bem vindo ao curso de PHP, ".$nome;
	echo '<br />';
	echo '<br />';

}

function calcular_soma($numero1, $numero2){
	echo "A soma entre 1 e 2 é :";
	return $numero1 + $numero2;
}

boas_vindas('Anderson');

echo /* (ou var) */ calcular_soma(1, 2);


?>