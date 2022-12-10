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
try{
	$curso = $_POST["txt_curso"];
	if(isset($curso)){
	$stmt = $conn->prepare("INSERT INTO curso(nome_curso) VALUES (?)");
	$stmt->bindValue(1,$curso,PDO::PARAM_STR);
	$stmt->execute();
	}
	echo'
    <script>
        alert("Selecione as disciplinas!");
        window.location.href = "../consulta/pesquisar_disciplina.php";
    </script>
    ';
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
$stm = null;
$conn = null;
?>
</head>
</html>
