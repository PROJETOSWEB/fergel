<?php
session_start();
$Fast = true;
include "dados.php";
$pedido=stripslashes(number_pedido());
$Para = "orcamentoweb@fergel.com"; //Não esqueça de modificar.
$Titulo = "Orçamento Online";
$Mensagem = "Pedido de Orçamento dos Produtos Número $pedido:\n";
$Mensagem.="Nome do responsável: $nome_responsavel\n";
$Mensagem.="Empresa: $empresa\n";
$Mensagem.="Ramo de atividade: $ramo_atividade\n";
$Mensagem.="E-mail: $email\n";
$Mensagem.="Telefone p/contato: ($tel_ddd)$tel_numero\n";
foreach($_SESSION as $Chave => $Valor){
	$Prefixo = substr($Chave, 0, strpos($Chave, "_"));
	if($Prefixo == "principal" || $Prefixo == "chapas" || $Prefixo == "tubos" || $Prefixo == "construcao"){
		$Numero = substr($Chave, strlen($Chave)-2, 2);
		$Nome = substr($Chave, strpos($Chave, "_")+1, strrpos($Chave, "_")-strpos($Chave, "_")-1);
		$Numero2 = ${$Prefixo . "Ids"}[$Nome];
		if($Numero > ${'Props' . $Numero2}[8])$Numero--;
		if($Numero > ${'Props' . $Numero2}[7])$Numero--;
		if($Numero > ${'Props' . $Numero2}[6])$Numero--;
		if($Numero > ${'Props' . $Numero2}[5])$Numero--;
		$Numero--;
		$Mensagem .= ${'Props' . $Numero2}[0] . ", " . ${'Produtos' . $Numero2}[$Numero] . " [" . ${'Ids' . $Numero2}[$Numero] . "], em uma quantidade de $Valor " . ${'Props' . $Numero2}[2] . "(s) \n";
	}elseif($Prefixo == "telas"){
		$Numero = substr($Chave, strlen($Chave)-2, 2);
		$Nome = substr($Chave, strpos($Chave, "_")+1, strrpos($Chave, "_")-strpos($Chave, "_")-1);
		$Numero2 = ${$Prefixo . "Ids"}[$Nome];
		$Unidade = explode("-", "$Valor");
		$Numero--;
		if(strlen($Unidade[0]) == 0)$Unidade[0] = 0;
		if(strlen($Unidade[1]) == 0)$Unidade[1] = 0;
		if(strlen($Unidade[2]) == 0)$Unidade[2] = 0;
		$Mensagem .= ${'Prop' . $Numero2}[0] . "[" . ${'Codigos' . $Numero2}[$Numero] . "], em quantidade de: Mt.Linear(" . $Unidade[0] . "), Mt2(" . $Unidade[1] . "), Rolo(" . $Unidade[2] . ")\n";
	}
}
mail($Para, $Titulo, $Mensagem);

//Soma 1 ao número do pedido
number_pedido(false);
session_destroy();
include("obrigado.htm");
?>
