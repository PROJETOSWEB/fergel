<?php

include '../conections/config.php';

$login = $_POST['login'];
$senha = $_POST['senha'];


$sql_login = "SELECT COUNT(*) AS qtd, status, id_clientes FROM clientes where login = '$login' AND senha = '$senha' AND status =1";
$executa_sql_login = mysql_query($sql_login)or die(mysql_error());
$row_login = mysql_fetch_array($executa_sql_login);


if ($row_login['qtd'] >= 1) {
    ?>
    <script>
        window.location.href = '../lista-clientes.php?r=certo&id=<?php echo $row_login['id_clientes']; ?>';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../login_adm.php?r=erro';
    </script>
    <?php

}
?>

