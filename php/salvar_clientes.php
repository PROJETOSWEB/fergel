<?php

include '../conections//config.php';

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

$id_cliente = $_POST['id_cliente'];


//INSERINDO DADOS NO BANCO
$sql_insert = "INSERT INTO clientes(razao_social, cnpj, email, telefone, contato, endereco, bairro, cep, login, senha, status, id_estado, id_cidade, id_clientes_cadastro)"
              ."VALUES('$razaosocial', '$cnpj', '$email', '$telefone', '$contato', '$endereco', '$bairro', '$cep', '$login', '$senha', 2, $estado, $cidade, $id_cliente)";


//EXECUTANDO QUERY
$executa_sql = mysql_query($sql_insert)or die(mysql_error());



if ($executa_sql){
    ?>
    <script>
        window.location.href = '../lista-clientes.php?resposta=certo&id=<?php echo $id_cliente?>';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../lista-clientes.php?resposta=erro&id=<?php echo $id_cliente; ?>';
    </script>
    <?php
}
?>

 