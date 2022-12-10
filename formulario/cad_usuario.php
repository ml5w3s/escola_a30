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
<form method="post" action="../controle/inserir_usuario.php">
<fieldset><legend><h3>Cadastro de usuário</h3></legend>
	<label>Usuário</label><br><input type="text" name="txt_user" required><br><br>
	<label>E-mail</label><br><input type="email" name="txt_mail" required><br><br>
	<label>Bairro</label><br><?php require_once("../modulo/select_bairro.php");?><br><br>
	<label>Senha</label><br><input type="password" name="txt_pass" required><br><br>
	<label>Confirmar Senha</label><br><input type="password" name="txt_conf" required><br> <br>   
	<input type="submit" value="Cadastrar"><br><br>
</fieldset></form></body></html>
