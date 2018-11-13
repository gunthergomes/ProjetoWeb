<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
	<TITLE> Cadastrar. </TITLE>
	<meta charset="utf-8">
	</head>
	<body>
        <h2> CADASTRAR PRODUTO </h2> <BR> <BR>
		 <?php
		 if(isset($_SESSION['msg']))
		echo $_SESSION['msg'];
	      unset($_SESSION['msg'])
		 ?>
		 
    <form method="POST" action = "processa.php">
    <label> Nome: </label>
    <input type="text" name = "nome" placeholder="Digite o nome:"> <br> <br>
   
    <label> Código: </label>
    <input type="text" name = "codigo" placeholder="Digite o codigo:"> <br> <br>
    
    <label> Descrição: </label>
    <input type="text" name = "descricao" placeholder="Digite a Descrição:"> <br> <br>
    
    <label> Valor Compra: </label>
    <input type="text" name = "valor_compra" placeholder="0,00"> <br> <br>
    
    <label> Valor Venda: </label>
    <input type="text" name = "valor_venda" placeholder="0,00"> <br> <br>
    
    <label> Categorias: </label>
    <input type="text" name = "categoriascol" placeholder="Digite a Categoria"> <br> <br>
	
    <input type = "submit" value = "Cadastrar">
    <input type="button" value="LISTAR" onclick="javascript: location.href='listar.php'">
     </form>
	</body>
</html>