<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
	<TITLE> Listar. </TITLE>
	<meta charset="utf-8">
	</head>
	<body>       
	   <?php
    
	      if(isset($_SESSION['msg']))
	      echo $_SESSION['msg'];
	      unset($_SESSION['msg']);
		 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "curso_php";

$con = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (mysqli_connect_errno($con)){
echo "Erro: " . mysqli_connect_error();
}else{
$sql = "SELECT ID, nome, codigo, descricao, valor_compra, valor_venda, categoriascol FROM produtos ";
$resultado = mysqli_query($con,$sql);
echo "<h2> <br> PRODUTOS CADASTADOS</h2>";

/* Tabela */
echo '<table width="100%" border="1">';
echo '<thead><tr>';
echo '<th>N</th>';
echo '<th>Nome</th>';
echo '<th>Codigo</th>';
echo '<th>Descrição</th>';
echo '<th>Valor Compra</th>';
echo '<th>Valor Venda</th>';
echo '<th>Categoria</th>';
echo '</tr></thead>';

$a = 0;
while ($pessoa = mysqli_fetch_array($resultado)) {
   echo '<td>' . $pessoa['ID'] . '</td>';
   echo '<td>' . $pessoa['nome'] . '</td>';
   echo '<td>' . $pessoa['codigo'] . '</td>';
   echo '<td>' . $pessoa['descricao'] . '</td>';
   echo '<td>' . $pessoa['valor_compra'] . '</td>';
   echo '<td>' . $pessoa['valor_venda'] . '</td>';
   echo '<td>' . $pessoa['categoriascol'] . '</td>';
   $a++;
echo '</tr>';}
mysqli_close($con);
}
?>
 
    
 <form method="POST" action = "deleta.php">
     <BR>
     <label> N: </label>
    <input type="text" name = "ID" placeholder="ID">
    <input type = "submit" value = "Apagar">
    </form>
 
    <form method="POST" action = "altera.php">
        <br> <BR>
        <label> N: </label>
    <input type="text" name = "ID" placeholder="ID">
    <input type = "submit" value = "Alterar">
    </form>
            <br> <BR>
            <input type="button" value="VOLTAR" onclick="javascript: location.href='index.php';" />
	  <br> <BR>
        </body>
</html>












