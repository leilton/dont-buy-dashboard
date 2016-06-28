<?php
	include "config/conexao.php";
	$genero = $_POST['genero'];
	$faixaEtaria = $_POST['faixaEtaria'];
	$diaDaSemana = $_POST['diaDaSemana'];
	$periodo = $_POST['periodo'];
	$motivo = $_POST['motivo'];
	$reincidente = $_POST['reincidente'];

	/*$inserir = "INSERT INTO `questionario` (`id`, `genero`, `faixaEtaria`, `diaDaSemana`, `periodo`, `motivo`, `reincidente`) VALUES (NULL , '$genero', '$faixaEtaria', '$diaDaSemana', '$periodo', '$motivo', '$reincidente')";
    $query = mysql_query($inserir) or die(mysql_error());//executo a query
    echo  "<script>alert('Enviado com Sucesso!');</script>";*/
?>
<!--<meta http-equiv="refresh" content="1; url=index.php">-->