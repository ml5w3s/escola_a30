<?php

if (isset($_POST['nome'])) {

    extract($_POST);

    include("mail/class.phpmailer.php");

ini_set('default_charset','UTF-8');

$mailer = new PHPMailer();

$mailer->IsSMTP();

$mailer->SMTPDebug = 1;

$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails

$mailer->Host = 'localhost'; //smtp.do minio.com.br

$mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP

$mailer->Username = 'email@email.com.br'; //Informe o e-mail completo

$mailer->Password = ''; //Senha da caixa postal

$mailer->FromName = ''; //Nome que será exibido para o destinatário

$mailer->From = ''; //Obrigatório ser a mesma caixa postal indicada em "username"

$mailer->AddAddress('',''); //Destinatários

$mailer->Subject = utf8_decode('Contato pelo Site');

$mailer->Body = (utf8_decode("

Nome: $name

E-mail: $email

Assunto: $subject

Mensagem: $message

		"));

$mailer->SMTPSecure = 'tls'; // SSL REQUERIDO

 if(!$mailer->Send())

    {

        //Exibimos o erro ocorrido

        echo $mailer->ErrorInfo;

    } else {

        echo "<script>
                    alert('Mensagem enviada com sucesso!');
                    history.back(1);
					document.getElementById('formulario').reset();
              </script>";

    }
	}
?>


