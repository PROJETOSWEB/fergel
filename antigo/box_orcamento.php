<?php
session_start();
@$Prefixo = $_POST['From'];
//Dados
include "dados.php";
//Limpar as sessões.
foreach($_SESSION as $SNome => $SValor){
	if(substr($SNome, 0, strlen($Prefixo)+1) == $Prefixo . "_"){
		unset($_SESSION[$SNome]);
	}
}

Converter($Principal, "principal", 0);
Converter($Chapas, "chapas", 0);
Converter($Construcao, "construcao", 0);
Converter($Tubos, "tubos", 0);
Converter($Telas, "telas", 1);

//Transforma as váriaveis $_POST em '$' e em Sessões.
function Converter($Produtos, $Prefixo2, $Extra){
global $Prefixo;
if($Prefixo2 == $Prefixo){
	$Tipo = "P";
}else{
	$Tipo = "G";
}
	if(@$Tipo == "P"){
		foreach($Produtos as $Nome => $Quantidade){
			for($i=1;$i<=$Quantidade; $i++){
				if($i<10){
					$Atual = "0" . $i;
				}else{
					$Atual = $i;
				}
				if($Extra == 0){
					$VarSel = $Nome . "_sel_" . $Atual;
					$VarQuant = $Nome . "_quant_" . $Atual;
					if(isset($_POST[$VarSel]) && @strlen($_POST[$VarQuant])){
						global $$VarSel, $$VarQuant;
						$$VarSel = true;
						$$VarQuant = $_POST[$VarQuant];
						$_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual] = $$VarQuant;
					}else{
						global $$VarSel;
						$$VarSel = false;
					}
				}else{
					$VarSel = $Nome . "_sel_" . $Atual;
					$VarQuantML = $Nome . "_quant_ml_" . $Atual;
					$VarQuantM2 = $Nome . "_quant_m2_" . $Atual;
					$VarQuantRLO = $Nome . "_quant_rlo_" . $Atual;
					if(isset($_POST[$VarSel]) && (@strlen($_POST[$VarQuantML]) || @strlen($_POST[$VarQuantM2]) || @strlen($_POST[$VarQuantRLO]))){
						global $$VarSel, $$VarQuantML, $$VarQuantM2, $$VarQuantRLO;
						$$VarSel = true;
						$$VarQuantML = @$_POST[$VarQuantML];
						$$VarQuantM2 = @$_POST[$VarQuantM2];
						$$VarQuantRLO = @$_POST[$VarQuantRLO];
						$_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual] = $$VarQuantML . "-" . $$VarQuantM2 . "-" . $$VarQuantRLO;
					}else{
						global $$VarSel;
						$$VarSel = false;
					}
				}
			}
		}
	}else{
		if($Prefixo != "chapas" && $Prefixo != "tubos" && $Prefixo != "telas" && $Prefixo != "construcao"){
			foreach($Produtos as $Nome => $Quantidade){
				for($i=1;$i<=$Quantidade; $i++){
					if($i<10){
						$Atual = "0" . $i;
					}else{
						$Atual = $i;
					}
					if($Extra == 0){
						$VarSel = $Nome . "_sel_" . $Atual;
						$VarQuant = $Nome . "_quant_" . $Atual;
						if(isset($_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual])){
							global $$VarSel, $$VarQuant;
							$$VarSel = true;
							$$VarQuant = $_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual];
						}else{
							global $$VarSel;
							$$VarSel = false;
						}
					}else{
						$VarSel = $Nome . "_sel_" . $Atual;
						$VarQuantML = $Nome . "_quant_ml_" . $Atual;
						$VarQuantM2 = $Nome . "_quant_m2_" . $Atual;
						$VarQuantRLO = $Nome . "_quant_rlo_" . $Atual;
						if(isset($_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual])){
							global $$VarSel, $$VarQuantML, $$VarQuantM2, $$VarQuantRLO;
							$$VarSel = true;
							$Quantidades = explode("-", $_SESSION[$Prefixo2 . "_" . $Nome . "_" . $Atual]);
							$$VarQuantML = $Quantidades[0];
							$$VarQuantM2 = $Quantidades[1];
							$$VarQuantRLO = $Quantidades[2];
						}else{
							global $$VarSel;
							$$VarSel = false;
						}		
					}
				}
			}
		}else{
		 echo "<script language='JavaScript'>window.close();</script>";//header("location: box_orcamento.htm");
		}
	}
}

//Função dos formulários adicionais.
function Total($Produtos, $Ids, $Props){
//Globais:
global $Chapas, $Principal, $Construcao, $Tubos;
$Chave = $Props[3];
$Valor = $Props[4];
for($p=1;$p<=$Valor;$p++){
	if($p < 10)$p = "0" . $p;
	global ${$Chave . "_quant_" . $p};
	global ${$Chave . "_sel_" . $p};
}
//Variaveis
$Variavel = $Props[3];
$Quantas = $Props[4];
$Pular = array($Props[5], $Props[6], $Props[7], $Props[8]);
//Título 
for($j=1;$j<=$Quantas;$j++){
	if($j == $Pular[0] || $j == $Pular[1] || $j == $Pular[2] || $j == $Pular[3])$j++;
	if($j < 10)$j = "0" . $j;
	if(@${$Variavel . "_sel_$j"}){
		$Mostrar = true;
		break;
	}
}
if(@$Mostrar == true){
?>
<tr>
      <td width="447" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="19" bgcolor="#FFCC66">
      <b><a name="<?php echo $Props[0]?>"><?php echo $Props[0]?></a></b></td>
      <td width="57" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="19" bgcolor="#FFCC66">&nbsp;</td>
      <td width="65" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="19" bgcolor="#FFCC66">&nbsp;</td>
      <td width="90" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: center; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="19" bgcolor="#FFCC66">&nbsp;</td>
    </tr>
    <tr>
      <td width="447" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="25">
      <?php echo $Props[1]?></td>
      <td width="57" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="25">
      Cód.</td>
      <td width="65" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="25">
      Quant.</td>
      <td width="90" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: center; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="25">
      Und.</td>
    </tr>
<?php

//Produtos
$i = 0;
$k = -1;
foreach($Produtos as $Valor){
$i++;
$k++;
if($i == $Pular[0] || $i == $Pular[1] || $i == $Pular[2] || $i == $Pular[3])$i++;
if($i < 10)$i = "0" . $i;
if(${$Variavel . "_sel_$i"}){ ?>
<tr>
<td width="447" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="16">
      <?php echo $Valor; ?></td>
      <td width="57" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="16">
      <?php echo $Ids[$k];?> </td>
      <td width="65" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: left; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="16">
      <font color="#FF0000" face="Arial"> 
      <?php echo ${$Variavel . "_quant_$i"};?></td>
      <td width="90" style="font-family: Arial; font-size: 10 pt; color: #000000; text-align: center; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="16">
      <?php echo $i == 1 ? $Props[2] : "\"";?></td>

</tr>
<?php 
}
}
}
}
//Fim da função dos adicionais.

//Função dos formulários adicionais para telas.
function Telas($Espacos, $Fio, $Codigos, $Peso, $Tamanho, $Props){
global $Telas;
$Chave = $Props[1];
$Valor = $Props[2];
for($p=1;$p<=$Valor;$p++){
	if($p < 10)$p = "0" . $p;
	global ${$Chave . "_quant_ml_" . $p};
	global ${$Chave . "_quant_m2_" . $p};
	global ${$Chave . "_quant_rlo_" . $p};
	global ${$Chave . "_sel_" . $p};
}
//Variaveis
$Variavel = $Props[1];
$Quantas = $Props[2];
//Título 
for($j=1;$j<=$Quantas;$j++){
	if($j < 10)$j = "0" . $j;
	if(@${$Variavel . "_sel_$j"}){
		$Mostrar = true;
		break;
	}
}
if(@$Mostrar == true){
?>
    <tr>
      <td width="615" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-top: 0; margin-bottom: 10" height="28" bgcolor="#FFCC66" colspan="8">
      <p align="left">
      <font face="Arial" size="2"> 
      <b><a name="<?php echo $Props[0];?>"><?php echo $Props[0];?></a></b></td>
    </tr>
    <tr>
      <td width="615" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="45" bgcolor="#FFFFFF" rowspan="2" align="center">
      <p align="left">Espaçam.</td>
      <td width="103" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="45" bgcolor="#FFFFFF" rowspan="2" align="center">
      <p align="left">Fio mm</td>
      <td width="67" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="45" bgcolor="#FFFFFF" rowspan="2" align="center">
      Cód.</td>
      <td width="79" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-right-style:none; border-right-width:medium" height="45" bgcolor="#FFFFFF" rowspan="2" align="center">
      <p align="left">Peso M²</td>
      <td width="85" style="border-style:none; border-width:medium; font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; " height="45" bgcolor="#FFFFFF" rowspan="2" align="left">
      Tam.Rolo</td>
      <td width="186" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-left-style:none; border-left-width:medium; border-bottom-style:solid; border-bottom-width:1" height="45" bgcolor="#FFFFFF" colspan="3" valign="bottom">
      <p align="center">Quantidade&nbsp; (Unids)</td>
    </tr>
    <tr>
      <td width="186" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-left-style:none; border-left-width:medium; border-top-style:solid; border-top-width:1" height="19" bgcolor="#FFFFFF" align="center">
      <p align="center">Mt.Linear</td>
      <td width="49" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-top-style:solid; border-top-width:1" height="19" bgcolor="#FFFFFF" align="center">
      <p align="center">M²</td>
      <td width="94" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-top-style:solid; border-top-width:1" height="19" bgcolor="#FFFFFF" align="center">
      <p align="center">Rolo</td>
    </tr>
<?php
//Produtos
$i = 0;
foreach($Espacos as $Valor){
$i++;
if($i < 10)$i = "0" . $i;
if(${$Variavel . "_sel_$i"}){ 
?>	
    <tr>
      <td width="615" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="25" bgcolor="#FFFFFF" align="left">
      <?php echo $Valor;?></td>
      <td width="103" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="25" bgcolor="#FFFFFF" align="left">
      <font face="Arial" size="2"> 
      <?php echo $Fio[$i-1 ];?></td>
      <td width="67" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 25; margin-right: 15; margin-top: 0; margin-bottom: 10" height="25" align="center">
      <?php echo $Codigos[$i-1];?></td>
      <td width="79" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-right-style:none; border-right-width:medium" height="25" bgcolor="#FFFFFF" align="left">
      <?php echo $Peso[$i-1];?></td>
      <td width="85" style="border-style:none; border-width:medium; font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; " height="25" bgcolor="#FFFFFF" align="left">
      <?php echo $Tamanho[$i-1];?></td>
      <td width="186" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-left-style:none; border-left-width:medium" height="25" bgcolor="#FFFFFF" align="center">
      <font color="#FF0000" face="Arial" > 
      <?php echo ${$Variavel . "_quant_ml_$i"};?></td>
      <td width="49" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="25" bgcolor="#FFFFFF" align="center">
      <font color="#FF0000" face="Arial" > 
      <?php echo ${$Variavel . "_quant_m2_$i"};?></td>
      <td width="94" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="25" bgcolor="#FFFFFF" align="center">
      <font color="#FF0000" face="Arial" > 
      <?php echo ${$Variavel . "_quant_rlo_$i"};?></td>
    </tr>
    <tr>
      <td width="615" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="103" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="67" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="79" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-right-style:none; border-right-width:medium" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="85" style="border-style:none; border-width:medium; font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; " height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="186" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10; border-left-style:none; border-left-width:medium" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="49" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
      <td width="94" style="font-family: Arial; font-size: 10 pt; color: #000000; margin-left: 3; margin-right: 0; margin-top: 0; margin-bottom: 10" height="4" bgcolor="#FFFFFF" align="center">&nbsp;      </td>
    </tr>
<?php
}
}
}
}
//Fim da função dos adicionais para telas.
?>

<html>
<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Fergel Indústria e Comércio</title>
<style fprolloverstyle>A:hover {color: #FF0000; font-size: 10 pt; font-family: Arial; font-style: italic; font-weight: bold}
</style>
</head>

<body topmargin="0" leftmargin="0" link="#000000" vlink="#000000" alink="#000000">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="674" id="AutoNumber1">
    <tr>
      <td width="674" colspan="2" align="center" valign="top" height="88">
      <p align="left">
      <img border="0" src="images/cabecas/top_orcamento_674_01.jpg" width="90" height="109"><img border="0" src="images/cabecas/top_orcamento_674_02.jpg" width="74" height="109"><img border="0" src="images/cabecas/top_orcamento_674_03.jpg" width="94" height="109"><img border="0" src="images/cabecas/top_orcamento_674_04.jpg" width="200" height="109"><img border="0" src="images/cabecas/top_orcamento_674_05.jpg" width="116" height="109"><img border="0" src="images/cabecas/top_orcamento_674_06.jpg" width="100" height="109"></td>
    </tr>
    <tr>
      <td width="312" align="center" valign="top" height="19">&nbsp;</td>
      <td width="138" align="center" valign="top" height="19">&nbsp;</td>
    </tr>
    <tr>
      <td width="674" align="left" valign="top" colspan="2" height="1">
      <p align="justify" style="margin-left: 50; margin-right: 50; margin-top:0; margin-bottom:15">
      <font face="Arial" size="2">PEDIDO NÚMERO <font color="#FF0000"> <b><?php printf("%s",number_pedido());?></b></font> </font>
      <p align="justify" style="margin:0 50; ">
      <img border="0" src="images/icon_aprende_orcamento.jpg" width="139" height="48"><p align="justify" style="margin:0 50; ">
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber3">
        <tr>
          <td width="24%" valign="top">&nbsp;</td>
          <td width="22%" valign="top" style="margin-left: 0; margin-right: 10">&nbsp;</td>
          <td width="32%" valign="top" style="margin-left: 0; margin-right: 10">&nbsp;</td>
          <td width="22%" valign="top" style="margin-left: 0; margin-right: 10">&nbsp;</td>
        </tr>
      </table>
      
      <p align="justify" style="margin:0 50; ">
      </td>
    </tr>
      <font color="#FF0000" face="Arial" size="1"> 
  </table>
  </center>
</div>
<div align="center">
  <center>
<table border=0>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">
      <p align="right">
      <font face="Arial" size="2"> 
      Nome do responsável:</td>
      <td width="414">
      <p style="margin-left: 5">
      <font color="#FF0000" face="Arial"> 
      <?php echo $nome_responsavel;?></td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">
      <p align="right">
      <font face="Arial" size="2"> 
      Empresa:

      </td>
      <td width="414">
      <p style="margin-left: 5">
      <font color="#FF0000" face="Arial"> 
      <?php echo $empresa;?></td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">
      <p align="right">
      <font face="Arial" size="2"> 
      Ramo de atividade:</td>
      <td width="414">
      <p style="margin-left: 5">
      <font color="#FF0000" face="Arial"> 
      <?php echo $ramo_atividade;?></td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">
      <p align="right">
      <font face="Arial" size="2"> 
      E-mail:

      </td>
      <td width="414">
      <p style="margin-left: 5">
      <font color="#FF0000" face="Arial" > 
      <?php echo $email;?></td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">
      <p align="right">
      <font face="Arial" size="2"> 
      Telefone p/contato:</td>
      <td width="414">
      <p style="margin-left: 5">
      <font color="#FF0000" face="Arial" > 
      (<?php echo $tel_ddd;?>)</font><font color="#FF0000" face="Arial"><?php echo $tel_numero;?></td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">&nbsp;</td>
      <td width="414">&nbsp;</td>
    </tr>
</table>
  </center>
</div>

  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="659" id="AutoNumber2" >
<?php /*
   <#######-------------- ADICIONAIS!!! -------------------------------##########################################
*/
Total($Produtos11, $Ids11, $Props11);
Total($Produtos12, $Ids12, $Props12);
Total($Produtos13, $Ids13, $Props13);
Total($Produtos14, $Ids14, $Props14);
Total($Produtos15, $Ids15, $Props15);
Total($Produtos16, $Ids16, $Props16);
Total($Produtos17, $Ids17, $Props17);
Total($Produtos18, $Ids18, $Props18);
Total($Produtos19, $Ids19, $Props19);
Total($Produtos20, $Ids20, $Props20);
Total($Produtos21, $Ids21, $Props21);
Total($Produtos22, $Ids22, $Props22);
Total($Produtos23, $Ids23, $Props23);
Total($Produtos24, $Ids24, $Props24);
Total($Produtos25, $Ids25, $Props25);
Total($Produtos26, $Ids26, $Props26);
Total($Produtos27, $Ids27, $Props27);
Total($Produtos28, $Ids28, $Props28);
Total($Produtos29, $Ids29, $Props29);
Total($Produtos30, $Ids30, $Props30);
Total($Produtos31, $Ids31, $Props31);
Total($Produtos32, $Ids32, $Props32);
Total($Produtos33, $Ids33, $Props33);
Total($Produtos34, $Ids34, $Props34);
//
Total($Produtos1, $Ids1, $Props1);
Total($Produtos2, $Ids2, $Props2);
Total($Produtos3, $Ids3, $Props3);
Total($Produtos4, $Ids4, $Props4);
Total($Produtos5, $Ids5, $Props5);
Total($Produtos6, $Ids6, $Props6);
Total($Produtos7, $Ids7, $Props7);
Total($Produtos8, $Ids8, $Props8);
Total($Produtos9, $Ids9, $Props9);
Total($Produtos10, $Ids10, $Props10);
Total($Produtos11, $Ids11, $Props11);
//
Total($Produtos35, $Ids35, $Props35);
Total($Produtos36, $Ids36, $Props36);
Total($Produtos37, $Ids37, $Props37);
Total($Produtos38, $Ids38, $Props38);
Total($Produtos39, $Ids39, $Props39);
Total($Produtos40, $Ids40, $Props40);
Total($Produtos41, $Ids41, $Props41);
Total($Produtos42, $Ids42, $Props42);
Total($Produtos43, $Ids43, $Props43);
Total($Produtos44, $Ids44, $Props44);
Total($Produtos45, $Ids45, $Props45);
Total($Produtos46, $Ids46, $Props46);
Total($Produtos47, $Ids47, $Props47);
Total($Produtos48, $Ids48, $Props48);
Total($Produtos49, $Ids49, $Props49);
Total($Produtos50, $Ids50, $Props50);
Total($Produtos51, $Ids51, $Props51);
Total($Produtos52, $Ids52, $Props52);
Total($Produtos53, $Ids53, $Props53);
Total($Produtos54, $Ids54, $Props54);
//
Total($Produtos55, $Ids55, $Props55);
Total($Produtos56, $Ids56, $Props56);
Total($Produtos57, $Ids57, $Props57);
Total($Produtos58, $Ids58, $Props58);
Total($Produtos59, $Ids59, $Props59);
Total($Produtos60, $Ids60, $Props60);
Total($Produtos61, $Ids61, $Props61);
Total($Produtos62, $Ids62, $Props62);
Total($Produtos63, $Ids63, $Props63);
Total($Produtos64, $Ids64, $Props64);
Total($Produtos65, $Ids65, $Props65);
Total($Produtos66, $Ids66, $Props66);
Total($Produtos67, $Ids67, $Props67);
Total($Produtos68, $Ids68, $Props68);
Total($Produtos69, $Ids69, $Props69);
Total($Produtos70, $Ids70, $Props70);
Total($Produtos71, $Ids71, $Props71);
Total($Produtos72, $Ids72, $Props72);
//
?></table> <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="674" id="AutoNumber2" height="1"><?php
Telas($Espacos1, $Fio1, $Codigos1, $Peso1, $Tamanho1, $Prop1);
Telas($Espacos2, $Fio2, $Codigos2, $Peso2, $Tamanho2, $Prop2);
Telas($Espacos3, $Fio3, $Codigos3, $Peso3, $Tamanho3, $Prop3);
Telas($Espacos4, $Fio4, $Codigos4, $Peso4, $Tamanho4, $Prop4);
Telas($Espacos5, $Fio5, $Codigos5, $Peso5, $Tamanho5, $Prop5);
Telas($Espacos6, $Fio6, $Codigos6, $Peso6, $Tamanho6, $Prop6);
Telas($Espacos7, $Fio7, $Codigos7, $Peso7, $Tamanho7, $Prop7);
Telas($Espacos8, $Fio8, $Codigos8, $Peso8, $Tamanho8, $Prop8);
Telas($Espacos9, $Fio9, $Codigos9, $Peso9, $Tamanho9, $Prop9);
Telas($Espacos10, $Fio10, $Codigos10, $Peso10, $Tamanho10, $Prop10);
Telas($Espacos11, $Fio11, $Codigos11, $Peso11, $Tamanho11, $Prop11);
 /*
   <##########-----------FIM DOS ADICIONAIS!!! -------------------------------###################################
*/?>

    </table>
  </center>

<p>&nbsp;</p>
<div align="center">
  <center>
  <form action="box_enviar.php" method=post name="box_orcamento">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="674" id="AutoNumber5">
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">&nbsp;</td>
      <td width="414">
      <p><input type="submit" value="Enviar" name="B1"></p>
      <input type="hidden" name="nome_responsavel" value="<?php echo $nome_responsavel;?>">
      <input type="hidden" name="empresa" value="<?php echo $empresa;?>">
      <input type="hidden" name="ramo_atividade" value="<?php echo $ramo_atividade;?>">
      <input type="hidden" name="email" value="<?php echo $email;?>">
      <input type="hidden" name="tel_ddd" value="<?php echo $tel_ddd;?>">
      <input type="hidden" name="tel_numero" value="<?php echo $tel_numero;?>">
      </td>
    </tr>
    <tr>
      <td width="60">&nbsp;</td>
      <td width="200">&nbsp;</td>
      <td width="414">&nbsp;</td>
    </tr>
    <tr>
      <td width="60" style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;</td>
      <td width="200" style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;</td>
      <td width="414" style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;</td>
    </tr>
    <tr>
      <td width="674" colspan="3" style="font-family: Arial; font-size: 8 pt; border-top-style: solid; border-top-width: 1">
      <p align="center" style="margin-top: 5"><b><font size="1">FERGEL</font><font size="1"> 
      INDÚSTRIA E COMÉRCIO DE AÇO DA AMAZÕNIA LTDA © 2006</font></b></td>
    </tr>
    </table>
    </form>
  </center>
</div>

</body>

</html>