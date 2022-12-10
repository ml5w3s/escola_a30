<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Escola A30</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h3>Atualização de professor</h3>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_professor.php">
	<h4>Escolha o professor a ser modificado</h4>
	<?php
	require_once("../modulo/select_professor.php");
?>
	<br><h4>Digite um novo nome para o professor</h4><br>
	<input type="text" name="txt_professor">
	<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>
