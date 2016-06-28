<?php 
$string = file_get_contents("../../dados.json");
$result = json_decode($string); 

$questionario = $result->questionario;

$ate18 = array(0,0,0,0,0,0,0);
$ate25 = array(0,0,0,0,0,0,0);
$ate35 = array(0,0,0,0,0,0,0);
$ate50 = array(0,0,0,0,0,0,0);
$acima50 = array(0,0,0,0,0,0,0);

$motivo1 = array(0,0);
$motivo2 = array(0,0);
$motivo3 = array(0,0);
$motivo4 = array(0,0);
$motivo5 = array(0,0);
$motivo6 = array(0,0);
$motivo7 = array(0,0);
$motivo8 = array(0,0);
$motivo9 = array(0,0);
$motivo10 = array(0,0);
$motivo11 = array(0,0);
$motivo12 = array(0,0);

$ate18periodo = array(0,0,0);
$ate25periodo = array(0,0,0);
$ate35periodo = array(0,0,0);
$ate50periodo = array(0,0,0);
$acima50periodo = array(0,0,0);

$ate18genero = array(0,0);
$ate25genero = array(0,0);
$ate35genero = array(0,0);
$ate50genero = array(0,0);
$acima50genero = array(0,0);

$motivo1reincidente = array(0,0);
$motivo2reincidente = array(0,0);
$motivo3reincidente = array(0,0);
$motivo4reincidente = array(0,0);
$motivo5reincidente = array(0,0);
$motivo6reincidente = array(0,0);
$motivo7reincidente = array(0,0);
$motivo8reincidente = array(0,0);
$motivo9reincidente = array(0,0);
$motivo10reincidente = array(0,0);
$motivo11reincidente = array(0,0);
$motivo12reincidente = array(0,0);

foreach ($questionario as $questao) {
//Faixa Etária por dia da Semana
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Segunda"){ $ate18[0] ++;}
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Terca"){ $ate18[1] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Quarta"){ $ate18[2] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Quinta"){ $ate18[3] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Sexta"){ $ate18[4] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Sabado"){ $ate18[5] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->diaDaSemana == "Domingo"){ $ate18[6] ++; }

	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Segunda"){ $ate25[0] ++;}
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Terca"){ $ate25[1] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Quarta"){ $ate25[2] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Quinta"){ $ate25[3] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Sexta"){ $ate25[4] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Sabado"){ $ate25[5] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->diaDaSemana == "Domingo"){ $ate25[6] ++; }

	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Segunda"){ $ate35[0] ++;}
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Terca"){ $ate35[1] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Quarta"){ $ate35[2] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Quinta"){ $ate35[3] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Sexta"){ $ate35[4] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Sabado"){ $ate35[5] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->diaDaSemana == "Domingo"){ $ate35[6] ++; }

	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Segunda"){ $ate50[0] ++;}
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Terca"){ $ate50[1] ++; }
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Quarta"){ $ate50[2] ++; }
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Quinta"){ $ate50[3] ++; }
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Sexta"){ $ate50[4] ++; }
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Sabado"){ $ate50[5] ++;}
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->diaDaSemana == "Domingo"){ $ate50[6] ++; }

	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Segunda"){ $acima50[0] ++;}
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Terca"){ $acima50[1] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Quarta"){ $acima50[2] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Quinta"){ $acima50[3] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Sexta"){ $acima50[4] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Sabado"){ $acima50[5] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->diaDaSemana == "Domingo"){ $acima50[6] ++; }
//Faixa Etária por dia da Semana

	//Motivos por Gênero
	if($questao->motivo == "Preco elevado" && $questao->genero == "Masculino"){ $motivo1[0] ++;}
	if($questao->motivo == "Preco elevado" && $questao->genero == "Feminino"){ $motivo1[1] ++;}

	if($questao->motivo == "Esta apenas pesquisando" && $questao->genero == "Masculino"){ $motivo2[0] ++;}
	if($questao->motivo == "Esta apenas pesquisando" && $questao->genero == "Feminino"){ $motivo2[1] ++;}

	if($questao->motivo == "Nao viu vantagens adicionais" && $questao->genero == "Masculino"){ $motivo3[0] ++;}
	if($questao->motivo == "Nao viu vantagens adicionais" && $questao->genero == "Feminino"){ $motivo3[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo4[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo4[1] ++;}

	if($questao->motivo == "Acompanhante opinando" && $questao->genero == "Masculino"){ $motivo5[0] ++;}
	if($questao->motivo == "Acompanhante opinando" && $questao->genero == "Feminino"){ $motivo5[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo6[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo6[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo7[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo7[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo8[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo8[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo9[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo9[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo10[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo10[1] ++;}

	if($questao->motivo == "Marca ruim" && $questao->genero == "Masculino"){ $motivo11[0] ++;}
	if($questao->motivo == "Marca ruim" && $questao->genero == "Feminino"){ $motivo11[1] ++;}

	if($questao->motivo == "Outro" && $questao->genero == "Masculino"){ $motivo12[0] ++;}
	if($questao->motivo == "Outro" && $questao->genero == "Feminino"){ $motivo12[1] ++;}
	//Motivos por Gênero

	//Faixa Etária por periodo do dia
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->periodo == "Manha"){ $ate18periodo[0] ++;}
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->periodo == "Tarde"){ $ate18periodo[1] ++; }
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->periodo == "Noite"){ $ate18periodo[2] ++; }


	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->periodo == "Manha"){ $ate25periodo[0] ++;}
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->periodo == "Tarde"){ $ate25periodo[1] ++; }
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->periodo == "Noite"){ $ate25periodo[2] ++; }

	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->periodo == "Manha"){ $ate35periodo[0] ++;}
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->periodo == "Tarde"){ $ate35periodo[1] ++; }
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->periodo == "Noite"){ $ate35periodo[2] ++; }

	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->periodo == "Manha"){ $ate50periodo[0] ++;}
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->periodo == "Tarde"){ $ate50periodo[1] ++; }
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->periodo == "Noite"){ $ate50periodo[2] ++; }

	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->periodo == "Manha"){ $acima50periodo[0] ++;}
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->periodo == "Tarde"){ $acima50periodo[1] ++; }
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->periodo == "Noite"){ $acima50periodo[2] ++; }

	//Faixa Etária por periodo do dia

	//Faixa Etária por Gênero

	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->genero == "Masculino"){ $ate18genero[0] ++;}
	if($questao->faixaEtaria == "Ate 18 Anos" && $questao->genero == "Feminino"){ $ate18genero[1] ++; }

	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->genero == "Masculino"){ $ate25genero[0] ++;}
	if($questao->faixaEtaria == "18 a 25 Anos" && $questao->genero == "Feminino"){ $ate25genero[1] ++; }

	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->genero == "Masculino"){ $ate35genero[0] ++;}
	if($questao->faixaEtaria == "25 a 35 Anos" && $questao->genero == "Feminino"){ $ate35genero[1] ++; }

	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->genero == "Masculino"){ $ate50genero[0] ++;}
	if($questao->faixaEtaria == "35 a 50 Anos" && $questao->genero == "Feminino"){ $ate50genero[1] ++; }

	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->genero == "Masculino"){ $acima50genero[0] ++;}
	if($questao->faixaEtaria == "Acima de 50 Anos" && $questao->genero == "Feminino"){ $acima50genero[1] ++; }

	//Faixa Etária por Gênero

	//Motivo por Reincidência

	if($questao->motivo == "Preco elevado" && $questao->reincidente == "Sim"){ $motivo1reincidente[0] ++;}
	if($questao->motivo == "Preco elevado" && $questao->reincidente == "Nao"){ $motivo1reincidente[1] ++;}

	if($questao->motivo == "Esta apenas pesquisando" && $questao->reincidente == "Sim"){ $motivo2reincidente[0] ++;}
	if($questao->motivo == "Esta apenas pesquisando" && $questao->reincidente == "Nao"){ $motivo2reincidente[1] ++;}

	if($questao->motivo == "Nao viu vantagens adicionais" && $questao->reincidente == "Sim"){ $motivo3reincidente[0] ++;}
	if($questao->motivo == "Nao viu vantagens adicionais" && $questao->reincidente == "Nao"){ $motivo3reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo4reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo4reincidente[1] ++;}

	if($questao->motivo == "Acompanhante opinando" && $questao->reincidente == "Sim"){ $motivo5reincidente[0] ++;}
	if($questao->motivo == "Acompanhante opinando" && $questao->reincidente == "Nao"){ $motivo5reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo6reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo6reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo7reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo7reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo8reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo8reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo9reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo9reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo10reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo10reincidente[1] ++;}

	if($questao->motivo == "Marca ruim" && $questao->reincidente == "Sim"){ $motivo11reincidente[0] ++;}
	if($questao->motivo == "Marca ruim" && $questao->reincidente == "Nao"){ $motivo11reincidente[1] ++;}

	if($questao->motivo == "Outro" && $questao->reincidente == "Sim"){ $motivo12reincidente[0] ++;}
	if($questao->motivo == "Outro" && $questao->reincidente == "Nao"){ $motivo12reincidente[1] ++;}

	//Motivo por Reincidência
}
?>