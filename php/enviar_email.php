﻿<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$destinatario = "karolfurletti@gmail.com";
$corpo = '
<html>
<head>
  <title>Teste de correio</title>
</head>
<body>
<h1>Olá amigos!</h1>
<p>
<b>Bem-vindos ao meu correio electrónico de teste</b>. Estou contente de ter tantos leitores.
</p>
</body>
</html>';

//para o envio em formato HTML
$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/html;
charset=iso-8859-1";

//endereço do remitente
$headers .= "From: Xuxé <ti@fergel.com.br>";

//endereço de resposta, se queremos que seja diferente a do remitente
$headers .= "Reply-To: karolfurletti@gmail.com";

//endereços que receberão uma copia $headers .= "Cc: manel@desarrolloweb.com";
//endereços que receberão uma copia oculta
$headers .= "Bcc: karolfurletti@gmail.com,karol_ingrid_avinte@hotmail.com";
$envia_email = mail($destinatario, $assunto, $corpo, $headers);


if ($envia_email) {
    ?>
    <script>
        window.location.href = '../contatos.php?r=certo'
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../contatos.php?r=erro'
    </script>

    <?php
}
?>
