<?php	  
	require_once ("../controle/conexao.php");
	$conn = conectar();
	$sql = 'SELECT * FROM disciplina';
	print "<select name='cbx_disciplina'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_disciplina']."'>".$row['nome_disciplina']."</option>";
	}
	print "</select>";
	$conn = null;
?>
