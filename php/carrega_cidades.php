<?php

include '../conections/config.php';

echo $estado = $_POST['estado'];

$sql = "SELECT * FROM cidade WHERE est_id = $estado";
$qr = mysql_query($sql) or die(mysql_error());

if(mysql_num_rows($qr) > 0){
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['cid_id'].'">'.$ln['cid_nome']."</option>";
   }
}
