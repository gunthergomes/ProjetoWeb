<!DOCTYPE html>
<html>
	<head>
	<TITLE> Alterar. </TITLE>
	<meta charset="utf-8">
	</head>
        
            <?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "curso_php";

        $con = mysqli_connect($servidor,$usuario,$senha,$dbname);
        $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);
          
        if (mysqli_connect_errno($con)){
        echo "Erro: " . mysqli_connect_error();
        }else{
        $sql = "SELECT ID, nome, codigo, descricao, valor_compra, valor_venda, categoriascol FROM produtos WHERE ID = $ID";
         $resultado = mysqli_query($con,$sql);
        $pessoa = mysqli_fetch_array($resultado);}
        $nome = $pessoa['nome'];
        $codigo = $pessoa['codigo'];
        $descricao = $pessoa['descricao'];
        $valor_compra = $pessoa['valor_compra'];
        $valor_venda = $pessoa['valor_venda'];
        $categoriascol = $pessoa['categoriascol'];
      
?>
            <form method="POST" action = "processaAltera.php">
                <label> Altere os dados e clique em alterar</label> <br>
                <label> Nome: </label>
    <label> Nome: </label>
    <input type="text" name = "nome" placeholder="Digite o nome:" value = "<?php echo $nome; ?>"> <br> <br>
	
    <label> Código: </label>
    <input type="text" name = "codigo" placeholder="Digite o codigo:" value = "<?php echo $codigo; ?>"> <br> <br>
    
    <label> Descrição: </label>
    <input type="text" name = "descricao" placeholder="Digite a Descrição:" value = "<?php echo $descricao; ?>"> <br> <br>
    
    <label> Valor Compra: </label>
    <input type="text" name = "valor_compra" placeholder="0,00" value = "<?php echo $valor_compra; ?>"> <br> <br>
    
    <label> Valor Venda: </label>
    <input type="text" name = "valor_venda" placeholder="0,00" value = "<?php echo $valor_venda; ?>"> <br> <br>
    
    <label> Categorias: </label>
    <input type="text" name = "categoriascol" placeholder="Digite a Categoria" value = "<?php echo $categoriascol; ?>"> <br> <br>
    <input type="hidden" name = "ID" value = "<?php echo $ID; ?>" > <br> <br>
   
        <input type = "submit" value = "Altera">
            </form>
               
</html>