<?php
include '../conections/config.php';

//PEGANDO OS DADOS POR POST
$cliente = $_POST['cliente'];
$situacao = $_POST['situacao'];
$responsavel = $_POST['responsavel'];
$obra = $_POST['obrac'];
$inicio = $_POST['inicio'];
$termino = $_POST['termino'];
$avisos = $_POST['avisos'];
$observacoes = $_POST['observacoes'];
$id_obra = $_GET['id'];


$endereco= $_POST['endereco'];

$foto1 = $_FILES['foto1'];
$foto2 = $_FILES['foto2'];
$foto3 = $_FILES['foto3'];
$foto4 = $_FILES['foto4'];
$legenda = $_POST['legenda'];
$arquivo = $_FILES['arquivo'];
$arquivoname = $_FILES['arquivo']['name'];
$nome_arquivo = $_POST['nomearquivo'];



$sql_update_dados = "UPDATE obra SET id_clientes = $cliente, situacao = $situacao, obra = '$obra',"
                    . "responsavel = '$responsavel', prev_inicio = '$inicio',"
                    . "prev_final = '$termino', avisos = '$avisos', obs = '$observacoes', endereco_obra ='$endereco' WHERE id_obra = $id_obra";


$executa_update_dados = mysql_query($sql_update_dados)or die(mysql_error());



if ($executa_update_dados) {

    if ($foto1['name'] <> "" || $foto2 <> "" || $foto3 <> "" || $foto4 <> "" ||$arquivoname <> "") {


        if ($arquivoname <> "") {

            $fileName5 = $_FILES["arquivo"]["name"];
            $pathAndName5 = "fotos/" . $fileName5;
            $fileTmpLoc5 = $_FILES["arquivo"]["tmp_name"];
            $moveResult5 = move_uploaded_file($fileTmpLoc5, $pathAndName5);

           echo $sql_insert_arquivo = "INSERT INTO arquivos(id_obra, arquivo, nome) VALUES($id_obra, '$fileName5', '$nome_arquivo')";
            $executa_sql_arquivo = mysql_query($sql_insert_arquivo)or die(mysql_error());
        }



        if ($foto1['name'] <> "") {
            $fileName1 = $_FILES["foto1"]["name"];
            $pathAndName1 = "fotos/" . $fileName1;
            $fileTmpLoc1 = $_FILES["foto1"]["tmp_name"];
            $moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);

            $sql_insert_foto1 = "INSERT INTO fotos(id_obra, foto, nome) VALUES($id_obra, '$fileName1', '$legenda')";
            $executa_sql_foto1 = mysql_query($sql_insert_foto1)or die(mysql_error());
        }


        if ($foto2['name'] <> "") {

            $fileName = $_FILES["foto2"]["name"];
            $pathAndName = "fotos/" . $fileName;
            $fileTmpLoc = $_FILES["foto2"]["tmp_name"];
            $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

            $sql_insert_foto2 = "INSERT INTO fotos(id_obra, foto) VALUES($id_obra, '$fileName')";
            $executa_sql_foto2 = mysql_query($sql_insert_foto2)or die(mysql_error());
        }

        if ($foto3['name'] <> "") {

            $fileName3 = $_FILES["foto3"]["name"];
            $pathAndName3 = "fotos/" . $fileName3;
            $fileTmpLoc3 = $_FILES["foto3"]["tmp_name"];
            $moveResult3 = move_uploaded_file($fileTmpLoc3, $pathAndName3);

            $sql_insert_foto3 = "INSERT INTO fotos(id_obra, foto) VALUES($id_obra, '$fileName3')";
            $executa_sql_foto3 = mysql_query($sql_insert_foto3)or die(mysql_error());
        }

        if ($foto4['name'] <> "") {

            $fileName4 = $_FILES["foto4"]["name"];
            $pathAndName4 = "fotos/" . $fileName4;
            $fileTmpLoc4 = $_FILES["foto4"]["tmp_name"];
            $moveResult4 = move_uploaded_file($fileTmpLoc4, $pathAndName4);

            $sql_insert_foto = "INSERT INTO fotos(id_obra, foto) VALUES($id_obra, '$fileName4')";
            $executa_sql_foto4 = mysql_query($sql_insert_foto)or die(mysql_error());
        }
    } else {
        ?>
        <script>
            window.location.href = '../edit-obra.php?id=<?php echo $id_obra; ?>&idc=<?php echo $_GET['idc']; ?>&cliente=<?php echo $_GET['cliente']; ?>';
        </script>
        <?php
    }
}


if ($executa_sql_foto4 == true || $executa_sql_foto1 == true || $executa_sql_foto2 == true || $executa_sql_foto3 == true) {
    ?>
    <script>
        window.location.href = '../edit-obra.php?r=certo&id=<?php echo $id_obra ?>';
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.href = '../edit-obra.php?r=erro&id=<?php echo $id_obra; ?>';
    </script>
    <?php
}
?>
   