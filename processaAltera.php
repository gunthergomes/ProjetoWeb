<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "curso_php";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$valor_compra_x = filter_input(INPUT_POST, 'valor_compra', FILTER_SANITIZE_STRING);
$valor_compra  = floatval($valor_compra_x);
$valor_venda_x = filter_input(INPUT_POST, 'valor_venda', FILTER_SANITIZE_STRING);
$valor_venda  = floatval($valor_venda_x);
$categoriascol = filter_input(INPUT_POST, 'categoriascol', FILTER_SANITIZE_STRING);
$N = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);
if($nome == '' or $codigo =='' or $descricao == '' or $valor_compra == '' or $valor_venda =='' or $categoriascol =='')
{ $_SESSION['msg'] = "<BR>Campos deixados nulo";
//header("Location: erro.php");
echo 'erro valor nulo';
}
else  {
    
$result_usuario = "UPDATE produtos  SET nome = '$nome' , codigo = '$codigo', descricao = '$descricao', valor_compra = $valor_compra, valor_venda = $valor_venda,  categoriascol = '$categoriascol' WHERE ID = $N ";

$resultado_usuario =mysqli_query($conn, $result_usuario);


header("Location: listar.php");}