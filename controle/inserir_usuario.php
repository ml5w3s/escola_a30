<?php
include("conexao.php");
$conn = conectar();
try{
$user = $_POST["txt_user"];
$mail = $_POST["txt_mail"];
$bairro = $_POST["cbx_bairro"];
$pass = md5($_POST["txt_pass"]);
$conf = md5($_POST["txt_conf"]);

if(isset($user) && $pass==$conf){
	$sql = "INSERT INTO usuario(usuario,email,bairro,senha) VALUES (?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1,$user,PDO::PARAM_STR);
	$stmt->bindValue(2,$mail,PDO::PARAM_STR);
	$stmt->bindValue(3,$bairro,PDO::PARAM_STR);
	$stmt->bindValue(4,$pass,PDO::PARAM_STR);
	$stmt->execute();

echo '<script>
		alert("Registro salvo com sucesso!");
		window.location.href = "../index.html";
	</script>';
}else{
echo '<script>
		alert("Usuario não informado ou senhas não conferem, tente novament!");
		window.location.href = "../index.html";
	</script>';   
}
}catch(PDOExeceptio $ex){
	echo 'Não cadastrado, erro'.$ex->getMessage();
}
?>
