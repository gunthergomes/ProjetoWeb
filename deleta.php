<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "curso_php";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

$ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);

if($ID == '')
{ $_SESSION['msg'] = "<BR>Campos deixados nulo";
header("Location: listar.php");
}
else  {
$result_usuario = "DELETE FROM produtos WHERE ID = $ID";
$resultado_usuario =mysqli_query($conn, $result_usuario);
header("Location: listar.php");}
