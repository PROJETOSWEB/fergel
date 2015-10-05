<?php

include '../conections/config.php';

//PEGANDO OS DADOS POR POST
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$contato = $_POST['contato'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$estado = $_POST['estados'];
 $cidade = $_POST['cidades'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$id_cliente = $_GET['id'];



$sql_update_cliente = "UPDATE clientes SET razao_social= '$razaosocial', cnpj = '$cnpj', email = '$email', "
        . "telefone = '$telefone', contato = '$contato', endereco = '$endereco', bairro = '$bairro', "
        . "cep = '$cep', login = '$login', senha = '$senha', status = 2, id_estado = $estado,"
        . "id_cidade = $cidade WHERE id_clientes = $id_cliente";

$executa_sql_update = mysql_query($sql_update_cliente)or die(mysql_error());


if ($executa_sql_update) {
    ?>
    <script>
        window.location.href = '../lista-clientes-update.php?r=certo&id=<?php echo $id_cliente; ?>'
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.href = '../lista-clientes-update.php?r=erro&id=<?php echo $id_cliente; ?>'
    </script>
    <?php
}
?>
    