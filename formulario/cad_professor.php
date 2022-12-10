<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola a30</title>
   	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<h3>Cadastro de professor</h3>
<form method="post" action="../controle/inserir_professor.php">
<div id="flex-container">
<article class="boxinterno">
<fieldset><br>
<label>Professor:</label>
<input type="text" name="txt_professor" required><br>
<label>Bairro: </label>
<?php require_once("../modulo/select_bairro.php");?>
<nav class="botoes"><input type="submit" value="Cadastrar"><nav><br>
</fieldset></form></article></div></body></html>

