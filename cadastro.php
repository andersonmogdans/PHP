<?php

if( isset($_POST['nome']) && empty( $_POST['nome'] ) ){
	echo "Preencha o nome completo <br>";
}

if( isset($_POST['cpf']) && empty( $_POST['cpf'] ) ){
	echo "Preencha o CPF <br>";
}

if( isset($_POST['cpf']) && !is_numeric( $_POST['cpf'] ) ){
	echo "O campo CPF deve conter apenas números <br>";
}


?>

<form method="post" action="">
	
	<label>
		Nome completo<span title="Obrigatório" style="color: #ff0000">*</span>:
	<input placeholder="Digite seu nome" type="text" name="nome">
	</label>

	<label>
		CPF<span title="Obrigatório" style="color: #ff0000">*</span>:
	<input placeholder="Digite seu CPF" type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">

</form>


<script type="text/javascript">
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          $('[data-toggle="popover"]').popover()

        })
    
    </script>
