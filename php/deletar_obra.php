<?php

include '../conections/config.php';

$id_excluir = $_GET['id'];
$idc = $_GET['idc'];

$sql_excluir_obra = "DELETE FROM obra WHERE id_obra = $id_excluir";
$executa_sql_excluir = mysql_query($sql_excluir_obra)or die(mysql_error());


if ($executa_sql_excluir) {
    ?>
    <script>
        window.location.href = '../lista-obras-cliente.php?re=certo&id=<?php echo $_GET['idc']; ?>&idc=<?php echo $_GET['idcliente']; ?>';
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.href = '../lista-obras-cliente.php?re=erro&id=<?php echo $_GET['idc']; ?>&idc=<?php echo $_GET['idcliente']; ?>';
    </script>
    <?php
}
?>

