<?php
include("conexao.php");
$conn = conectar();

session_start();
$user = $_POST["txt_user"];
$pass = md5($_POST["txt_pass"]);

$sql = "SELECT * FROM usuario where usuario = '$user'";

$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$usuario = $row[usuario];
$senha = $row[senha];

if($usuario == $user and $pass==md5($senha)) {		
	$_SESSION['usuario'] = $user;
	$_SESSION['senha'] = $pass;
	echo'<script>
        alert("Acesso Liberado!");
        window.location.href = "../index.html";
    </script>';
} else {
	unset ($_session['$user'];
	unset ($_session['$pass'];	
	echo '<script>
        alert("Usuario ou senha incorretos!");
        window.location.href = "../formulario/login.php";
    </script>';
}
?>
