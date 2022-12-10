<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Mercearia J1</title>
	<link rel='stylesheet' type='text/css' href='../estilo/geral.css'>
</head>
<body>
<h1>Recido</h1>
<div class="flex-container">
<div id="recibox" >
<fieldset>
<?php
echo "<small>Mercearia J1 - data: ".date('d/m/y')." - hora: ".date('H:i')."</small>";
?>
<table class="tabrecibo"><tr><th>Disciplina</th></tr>	
<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
	$curso=$_POST['curso'];
	$total=0.0;
	$sql = "SELECT c.nome_curso,  AS preco FROM cliente c 
	INNER JOIN curso_tem_disciplina t ON t.cursoe=c.cod_curso
	INNER JOIN disciplina d ON d.cod_disciplina=t.disciplina
	WHERE cod_curso LIKE $curso";
	foreach ($conn->query($sql) as $row) {
		print "<tr class='linharecibo'><td>".$row['nome_disciplina']."</td></tr>";
		
	}
	print "<h3>RECIBO NÚMERO <u>".$row['nome_disciplina'].""</b></u></h4><h3>Produtos:</h3></table><br><a href='http://localhost/escola_a30'>Voltar</a>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fildset></div></div></body></html>
