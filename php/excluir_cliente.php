<?php

include '../conections/config.php';

$idcliente = $_GET['id'];

$sql_verifica_obra = "SELECT COUNT(*) as qtd FROM obra WHERE id_clientes = $idcliente";
$executa_sql_verifica_obra = mysql_query($sql_verifica_obra)or die(mysql_error());
$row_qtd = mysql_fetch_array($executa_sql_verifica_obra);

if ($row_qtd['qtd'] >= 1) {
    ?>
    <script>
        window.location.href = '../lista-clientes.php?qtd=erro'
    </script>
    <?php

} else {

    $sql_delete = "DELETE FROM clientes WHERE id_clientes = $idcliente";
    $executa_sql_delete = mysql_query($sql_delete)or die(mysql_error());


    if ($executa_sql_delete) {
        ?>
        <script>
            window.location.href = '../lista-clientes.php?rd=certo&id=<?php echo $_GET['idc']; ?>'
        </script>
        <?php

    } else {
        ?>
        <script>
            window.location.href = '../lista-clientes.php?rd=erro'
        </script>
        <?php

    }
}
?>

