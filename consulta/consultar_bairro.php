<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<div class="flex-container">
<div id="box">
<fieldset>	
	<table border="1"><tr><th width="50%">Bairro</th></tr>
<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
	$sql = "SELECT nome_bairro FROM bairro";
	foreach ($conn->query($sql) as $row) {
	   print "<tr><td>".$row['nome_bairro']."</td></tr>";
	}
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</table><br><a href='http://localhost/escola_a30'>Voltar</a>
</fieldset></div></div></body></html>
