<?php

/*
//strtolower - todas minúsculas

$texto = "Curso Completo de PHP <br>";
strtolower($texto);
echo strtolower($texto);

//strtoupper - todas maiúsculas

strtoupper($texto);
echo strtoupper($texto);

//ucfirst - primeira maiúscula

$texto2 = "curso de PHP<br><br>";
ucfirst($texto2);
echo ucfirst($texto2);

$texto3 = "Felicidade é igual uma borboleta, quanto mais você corre atrás mais ela se afasta, um dia você se distrai e ela pousa no seu ombro ";
strlen($texto3);
echo strlen($texto3);
*/


/*$cpf = isset($_POST['cpf']) ?  $_POST['cpf'] : '';
echo $total_string_cpf = strlen($cpf);

if($total_string_cpf != 11 && $cpf != ''){
	echo "CPF inválido";
}
*/

//str_replace

/*$texto = "12.43.1312.43-12";
$cpf = str_replace(".", " ", $texto);
$cpf = str_replace("-", " ", $texto);
echo $cpf; */

//substr

$texto = "Qualquer árvore que queira tocar os céus, precisa ter raízes tão profundas ao ponto de tocar os infernos";

$noticia = substr($texto, 0, 33);
echo $noticia . "...";

?>



<form style="display: none" method="post" action="">
	<label>CPF:
	<input placeholder="Digite seu CPF" type="text" name="cpf">
	</label>
	<input type="submit" value="cadastrar">
</form>
