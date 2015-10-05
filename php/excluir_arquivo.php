<?php

include '../conections/config.php';

$id_arquivo = $_GET['arquivo'];
$idobra = $_GET['idobra'];


$sql_exclui_arquivo = "DELETE FROM arquivos WHERE id_arquivos = $id_arquivo";
$executa_exclui_arquivo = mysql_query($sql_exclui_arquivo)or die(mysql_error());


if ($executa_exclui_arquivo) {
    ?>
    <script>
        window.location.href = '../edit-obra.php?id=<?php echo $idobra ?>#arquivos';
    </script>

    <?php

}
?>

  


