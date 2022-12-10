<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola A30</title>
</head>
<body>
    <h2>Exclusão de bairro</h2>
    <form method="post" action="../controle/excluir_bairro.php">
    <fieldset>
    <?php	  
	require_once("../modulo/select_bairro.php");
	?>
    <input type="submit" value="Excluir">
</fieldset>
    </form>
</body>
</html>
