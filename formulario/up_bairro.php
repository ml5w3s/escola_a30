<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h3>Atualização de bairro</h3>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_bairro.php">
	<h4>Escolha o bairro a ser modificado</h4>
	<?php
	require_once("../modulo/select_bairro.php");
?>
	<br><h4>Digite um novo nome para o bairro</h4><br>
	<input type="text" name="txt_bairro">
	<input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>
