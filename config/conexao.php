<?php
// faz conexão com o servidor MySQL
$conn = @mysql_connect("localhost","root","") or die ("O servidor não responde!");
// conecta-se ao banco de dados
$db = @mysql_select_db("naoCompra",$conn)
	or die ("Não foi possivel conectar-se ao banco de dados!");
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>