<?php
$empresa = $_POST['empresa'];
$emailorcamento = $_POST['email'];
$contato = $_POST['contato'];
$telefone = $_POST['telefone'];

$array_produto = $_POST['produto'];
$array_preco = $_POST['preco'];
$array_quantidade = $_POST['quantidade'];

$to = 'lene@fergel.com.br';
$subject = 'Cotacao de Produtos';
$email = $empresa . "\r\n";
$email .= $emailorcamento . "\r\n";
$email .= $contato . "\r\n";
$email .= $telefone . "\r\n";
$email .= "\r\n\r\n";
$email .= 'Solicito a cotacao dos seguintes itens:';
$email .= "\r\n\r\n";

for ($index = 0; $index < sizeof($array_produto); $index++) {

    $email .= $array_produto[$index] . " " . $array_preco[$index] . " Qtd:" . $array_quantidade[$index] . "\r\n";
}

$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Pedido de vendas online <ti@fergel.com.br>";
$headers[] = "Bcc: Setor Vendas <thiago@maneschy>";
$headers[] = "Reply-To: Recipient Name <ti@fergel.com.br>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/" . phpversion();

$retval = mail($to, $subject, $email, implode("\r\n", $headers));

if ($retval == true) {
    ?>

    <script>
        window.location.href = '../orcamento.html'
        alert('Orcamento enviado com sucesso!')
    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = '../orcamento.html'
        alert('Erro ao enviar Orcamento')
    </script>

    <?php
}
?>

