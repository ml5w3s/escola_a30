<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <title>Upload</title>
</head>

<body>
	
<?php

/*QUANDO O BOTÃO 'btm' FOR CLICADO...*/
	if(isset($_POST["btm"])){	
		echo 'Nome do arquivo: '.$_FILES["arquivo"]["name"];	echo'<br/>';
		echo 'Tamanho do arquivo em bytes: '.$_FILES["arquivo"]["size"];	echo'<br/>';
		echo 'Pasta temporária: '.$_FILES["arquivo"]["tmp_name"];echo'<br/>';
		echo 'Existe erro?: '.$_FILES["arquivo"]["error"];	echo'<br/>';
		echo 'Tipo do arquivo: '.$_FILES["arquivo"]["type"];	echo'<br/>';
	}
	
/*NOTE O COMANDO '$_FILES. ELE ESTÁ SENDO SEGUIDO PELO 'name' APLICADO NO FORMULÁRIO HTML, E PELO ATRIBUTO REAL DO ARQUIVO ENVIADO*/

/*COM O CÓDIGO ACIMA ENVIAMOS O ARQUIVO PARA O SERVIDOR, MAS ELE SE ENVONTRA APENAS DE FORMA TEMPORÁRIA NO MESMO. ISSO PODE SER PERCEBIDO AO ABRIRMOS A PASTA ONDE SALVAMOS NOSSOS ARQUIVO DO EXERCÍCIO. PARA QUE O ARQUIVO SEJA SALVO DE FORMA PERMANENTE ESCREVEMOS O CÓDIGO ABAIXO*/

	if (isset($_POST["btm"])){	/*Quando o btm for ativado...*/
		
		$temp=$_FILES['arquivo']['tmp_name'];	/*Variável para o arquivo temporário*/
		$final=$_FILES['arquivo']['name'];		/*Variável para o arquivo final*/
		$pasta='uploads/';						/*Variável para a pasta final do arquivo*/
		$upload=move_uploaded_file($temp,$pasta.$final);	/*Movendo o arquivo da tmp para a final*/
		echo 'Arquivo enviado com sucesso!';
	}


?>

<!--EXPLICAÇÃO DAS MENSAGENS DE ERRO

Desde o PHP 4.2.0, PHP retorna um código de erro apropriado na array do arquivo. O código de erro pode ser encontrado em ['error'] na array que é criada durante o upload do arquivo. Em outras palavras, o erro deve ser encontrado em $_FILES['userfile']['error'].

UPLOAD_ERR_OK
Valor: 0; não houve erro, o upload foi bem sucedido.

UPLOAD_ERR_INI_SIZE
Valor 1; O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.

UPLOAD_ERR_FORM_SIZE
Valor: 2; O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML.

UPLOAD_ERR_PARTIAL
Valor: 3; o upload do arquivo foi feito parcialmente.

UPLOAD_ERR_NO_FILE
Valor: 4; Não foi feito o upload do arquivo.
-->

</body>
</html>