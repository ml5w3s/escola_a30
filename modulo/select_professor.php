<?php	  
	require_once ("../controle/conexao.php");
	$conn = conectar();
	$sql = 'SELECT * FROM professor';
	print "<select name='cbx_professor'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
	}
	print "</select>";
	$conn = null;
?>
