<?php

include '../conections/config.php';

$idfoto = $_GET['id'];
$ido = $_GET['ido'];

$sql_delete_foto = "DELETE FROM fotos WHERE idfotos = $idfoto";
$executa_sql_delete_foto = mysql_query($sql_delete_foto)or die(mysql_error());


if ($executa_sql_delete_foto) {
    ?>
    <script>
        window.location.href = '../edit-obra.php?id=<?php echo $ido; ?>'
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../edit-obra.php?id=<?php echo $ido; ?>'
    </script>
    <?php

    }