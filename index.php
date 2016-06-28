<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Não Compra</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
</head>
<body>
	<div class="container">
		<a href="dashboard/pages/naoCompra.php"><i class="fa fa-home" aria-hidden="true"></i> Ir para o Dashboard</a>
	    <div class="content">
			<?php
				$string = file_get_contents("dados.json");
				$result = json_decode($string);

				$perguntasDiaDaSemana = $result->perguntas_diadasemana;
				$perguntasFaixaEtaria = $result->perguntas_faixaetaria;
				$perguntasGenero = $result->perguntas_genero;
				$perguntasMotivo = $result->perguntas_motivo;
				$perguntasPeriodo = $result->perguntas_periodo;
				$perguntasReincidente = $result->perguntas_reincidente;
			?>
			
				<h1>Não Compra</h1>
				<h3 class="form-title">Questionário</h3>
			<div class="form-container">
				<form action="inserir.php" method="post">
					<div class="form-content">
						<label for="Genero">Gênero: </label>
						<select name="genero">
							<?php foreach ($perguntasGenero as $pergunta) {
								echo "<option value='$pergunta->genero'>".$pergunta->genero."</option>";
							} ?>
						</select>
					</div>
					<div class="form-content"> 
						<label for="faixaEtaria">Faixa Etária: </label>
						<select name="faixaEtaria">
							<?php foreach ($perguntasFaixaEtaria as $pergunta) {
								echo "<option value='$pergunta->faixaEtaria'>".$pergunta->faixaEtaria."</option>";
							} ?>
						</select>
					</div>
					<div class="form-content"> 
						<label for="diaDaSemana">Dia da Semana: </label>
						<select name="diaDaSemana">
							<?php foreach ($perguntasDiaDaSemana as $pergunta) {
								echo "<option value='$pergunta->diaDaSemana'>".$pergunta->diaDaSemana."</option>";
							} ?>
						</select>
					</div>
					<div class="form-content"> 
						<label for="periodo">Período: </label>
						<select name="periodo">
							<?php foreach ($perguntasPeriodo as $pergunta) {
								echo "<option value='$pergunta->periodo'>".$pergunta->periodo."</option>";
							} ?>
						</select>
					</div>
						<div class="form-content"> 
							<label for="motivo">Motivo: </label>
							<select name="motivo">
								<?php foreach ($perguntasMotivo as $pergunta) {
								echo "<option value='$pergunta->motivo'>".$pergunta->motivo."</option>";
							} ?>
							</select>
						</div>
						<div class="form-content"> 
							<label for="reincidente">Reincidência: </label>
							<select name="reincidente">
								<?php foreach ($perguntasReincidente as $pergunta) {
								echo "<option value='$pergunta->reincidente'>".$pergunta->reincidente."</option>";
							} ?>
							</select>
						</div>
					<br><br>
					<div class="buttons">
						<button type="reset" class="limpar">Limpar</button>
						<button type="submit" class="submeter">Submeter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>