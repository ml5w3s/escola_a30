<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">    
</head>
<body>
<div id="flex-container">
<article class="menu">
<?php
	include("../modulo/menu.php");
?>
</article>
<article class="boxinterno">
<h3>Cadastro de bairro</h3>
    <form method="post" action="../controle/inserir_bairro.php">
    <fieldset><br>        
        <label>Digite o bairro</label>
        <input type="text" name="txt_bairro"><br>
        <nav class="botoes"><input type="submit" value="Cadastrar"></nav><br>
    </fieldset>
    </form>
</article>
</div></body></html>
