<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projeto PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo/geral.css">
</head>
<?php
include("conexao.php");
$conn = conectar();
$bairro = $_POST["txt_bairro"];
$tab = "bairro";
$sql = ("INSERT INTO $tab(nome_bairro) VALUES (?)");
$query = $conn->prepare($sql);
$query->bindParam(1,$bairro, PDO::PARAM_STR) ;
$query->execute();
header('Location: http://localhost/escola_a30');
?>
</head>
</html>