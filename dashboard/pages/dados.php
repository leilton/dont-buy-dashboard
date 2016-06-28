<?php 
$string = file_get_contents("../../dados.json");
$result = json_decode($string); 

$questionario = $result->questionario;

$ate18 = 0;
$ate25 = 0;
$ate35 = 0;
$ate50 = 0;
$acima50 = 0;

$generoMasculino = 0;
$generoFeminino = 0;

$periodoManha = 0;
$periodoTarde = 0;
$periodoNoite = 0;

$semanaSegunda = 0;
$semanaTerca = 0;
$semanaQuarta = 0;
$semanaQuinta = 0;
$semanaSexta = 0;
$semanaSabado = 0;
$semanaDomingo = 0;

$motivo1 = 0;
$motivo2 = 0;
$motivo3 = 0;
$motivo4 = 0;
$motivo5 = 0;
$motivo6 = 0;
$motivo7 = 0;
$motivo8 = 0;
$motivo9 = 0;
$motivo10 = 0;
$motivo11 = 0;
$motivo12 = 0;

$reincidenciaSim = 0;
$reincidenciaNao = 0;

foreach ($questionario as $questao) {
	if($questao->faixaEtaria == "Ate 18 Anos"){ $ate18 ++;}
	if($questao->faixaEtaria == "18 a 25 Anos"){ $ate25 ++;}
	if($questao->faixaEtaria == "25 a 35 Anos"){ $ate35 ++;}
	if($questao->faixaEtaria == "35 a 50 Anos"){ $ate50 ++;}
	if($questao->faixaEtaria == "Acima de 50 Anos"){ $acima50 ++;}


	if($questao->genero == "Masculino"){ $generoMasculino ++;}
	if($questao->genero == "Feminino"){ $generoFeminino ++;}


	if($questao->periodo == "Manha"){ $periodoManha ++;}
	if($questao->periodo == "Tarde"){ $periodoTarde ++;}
	if($questao->periodo == "Noite"){ $periodoNoite ++;}


	if($questao->diaDaSemana == "Segunda"){ $semanaSegunda ++;}
	if($questao->diaDaSemana == "Terca"){ $semanaTerca ++; }
	if($questao->diaDaSemana == "Quarta"){ $semanaQuarta ++; }
	if($questao->diaDaSemana == "Quinta"){ $semanaQuinta ++; }
	if($questao->diaDaSemana == "Sexta"){ $semanaSexta ++; }
	if($questao->diaDaSemana == "Sabado"){ $semanaSabado ++; }
	if($questao->diaDaSemana == "Domingo"){ $semanaDomingo ++; }


	if($questao->reincidente == "Sim"){ $reincidenciaSim ++;}
	if($questao->reincidente == "Nao"){ $reincidenciaNao ++;}


	if($questao->motivo == "Preco elevado"){ $motivo1++;}
	if($questao->motivo == "Esta apenas pesquisando"){ $motivo2++;}
	if($questao->motivo == "Nao viu vantagens adicionais"){ $motivo3++;}
	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo4++;}
	if($questao->motivo == "Acompanhante opinando" && $questao->genero == "Masculino"){ $motivo5++;}
	/*if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo6++;}
	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo7++;}
	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo8++;}
	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo9++;}
	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo10++;}*/
	if($questao->motivo == "Marca ruim" && $questao->genero == "Masculino"){ $motivo11++;}
	//if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo12++;}
}
?>