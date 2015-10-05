<?php

include '../conections/config.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql_login = "SELECT COUNT(*) AS qtd, razao_social FROM clientes where login = '$login' AND senha = '$senha'";
$executa_sql_login = mysql_query($sql_login)or die(mysql_error());
$row_login = mysql_fetch_array($executa_sql_login);


if ($row_login['qtd'] >= 1) {
    ?>
    <script>
        window.location.href = '../cliente-lista-obras.php?r=certo&cliente=<?php echo base64_encode($row_login['razao_social']) ?>';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../login_cliente.php?r=erro';
    </script>
    <?php
}
?>

