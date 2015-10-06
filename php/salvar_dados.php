<?php

include '../conections/config.php';

//PEGANDO OS DADOS POR POST
$cliente = $_POST['cliente'];
$situacao = $_POST['situacao'];
$responsavel = $_POST['responsavel'];
$obra = $_POST['obra'];
$inicio = $_POST['inicio'];
$termino = $_POST['termino'];
$avisos = $_POST['avisos'];
$observacoes = $_POST['observacoes'];
$endereco = $_POST['endereco'];


$foto1 = $_FILES['foto1'];
$foto2 = $_FILES['foto2'];
$foto3 = $_FILES['foto3'];
$foto4 = $_FILES['foto4'];

$legenda1 = $_POST['legenda1'];
$legenda2 = $_POST['legenda2'];
$legenda3 = $_POST['legenda3'];
$legenda4 = $_POST['legenda4'];
$arquivo = $_FILES['arquivo'];

$arquivoname = $_FILES['arquivo']['name'];
$nome_arquivo = $_POST['nomearquivo'];


//MONTANDO QUERY PARA INSERIR NO BANCO
$sql_inserir_dados = "INSERT INTO obra (id_clientes, situacao, obra, responsavel, prev_inicio, prev_final, avisos, obs, endereco_obra)"
        . "VALUES($cliente, $situacao, '$obra', '$responsavel', '$inicio', '$termino', '$avisos', '$observacoes','$endereco')";


$executa_sql_inserir = mysql_query($sql_inserir_dados)or die(mysql_error());


if ($executa_sql_inserir) {

//PEGANDO O ULTIMO ID
    $sql_seleciona_id = "SELECT MAX(id_obra) as ultimo FROM obra";
    $executa_seleciona_id = mysql_query($sql_seleciona_id)or die(mysql_error());
    $row = mysql_fetch_array($executa_seleciona_id);

    if ($executa_seleciona_id) {
        $ultimo_id = $row['ultimo'];


        if ($foto1['name'] <> "" || $foto2 <> "" || $foto3 <> "" || $foto4 <> "" || $arquivoname <> "") {


            if ($arquivoname <> "") {

                $fileName5 = $_FILES["arquivo"]["name"];
                $pathAndName5 = "fotos/" . $fileName5;
                $fileTmpLoc5 = $_FILES["arquivo"]["tmp_name"];
                $moveResult5 = move_uploaded_file($fileTmpLoc5, $pathAndName5);

                $sql_insert_arquivo = "INSERT INTO arquivos(id_obra, arquivo, nome) VALUES($ultimo_id, '$fileName5', '$nome_arquivo')";
                $executa_sql_arquivo = mysql_query($sql_insert_arquivo)or die(mysql_error());
            }




            if ($foto1['name'] <> "") {
                $fileName1 = $_FILES["foto1"]["name"];
                $pathAndName1 = "fotos/" . $fileName1;
                $fileTmpLoc1 = $_FILES["foto1"]["tmp_name"];
                $moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);

                $sql_insert_foto1 = "INSERT INTO fotos(id_obra, foto, nome) VALUES($ultimo_id, '$fileName1', '$legenda1')";
                $executa_sql_foto1 = mysql_query($sql_insert_foto1)or die(mysql_error());
            }


            if ($foto2['name'] <> "") {

                $fileName = $_FILES["foto2"]["name"];
                $pathAndName = "fotos/" . $fileName;
                $fileTmpLoc = $_FILES["foto2"]["tmp_name"];
                $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

                $sql_insert_foto2 = "INSERT INTO fotos(id_obra, foto, nome) VALUES($ultimo_id, '$fileName', '$legenda2')";
                $executa_sql_foto2 = mysql_query($sql_insert_foto2)or die(mysql_error());
            }

            if ($foto3['name'] <> "") {

                $fileName3 = $_FILES["foto3"]["name"];
                $pathAndName3 = "fotos/" . $fileName3;
                $fileTmpLoc3 = $_FILES["foto3"]["tmp_name"];
                $moveResult3 = move_uploaded_file($fileTmpLoc3, $pathAndName3);

                $sql_insert_foto3 = "INSERT INTO fotos(id_obra, foto, nome) VALUES($ultimo_id, '$fileName3', '$legenda3')";
                $executa_sql_foto3 = mysql_query($sql_insert_foto3)or die(mysql_error());
            }

            if ($foto4['name'] <> "") {

                $fileName4 = $_FILES["foto4"]["name"];
                $pathAndName4 = "fotos/" . $fileName4;
                $fileTmpLoc4 = $_FILES["foto4"]["tmp_name"];
                $moveResult4 = move_uploaded_file($fileTmpLoc4, $pathAndName4);

                $sql_insert_foto = "INSERT INTO fotos(id_obra, foto, nome) VALUES($ultimo_id, '$fileName4', '$legenda4')";
                $executa_sql_foto4 = mysql_query($sql_insert_foto)or die(mysql_error());
            }
        } else {
            ?>
            <script>
                window.location.href = '../add-dados.php';
            </script>
            <?php

        }
    }
}

if ($executa_sql_foto4 == true || $executa_sql_foto1 == true || $executa_sql_foto2 == true || $executa_sql_foto3 == true) {
    ?>
    <script>
        window.location.href = '../add-dados.php?r=certo&id=<?php echo $_GET['id']; ?>';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../add-dados.php?r=erro&id=<?php echo $_GET['id']; ?>';
    </script>
    <?php

}
?>
