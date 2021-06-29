<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="William Kauan Marcolan">
	<title>e-book rumo ao prata</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

if(isset($_POST['enviar'])){
	$from = "marcolanwilliam6@gmail.com";
	$email = $_POST['email'];
	$registro = fopen("data.log","a+");
	$nickname = $_POST['nickname'];
	$selected = $_POST['selected'];
	$to_email = $email;
	$subject = "PDF - Do Challenger ao Prata em um Dia";
	$body = "Segue aqui o link para a 'BIBLIA' dos verdadeiros campeões: https://gamesport.com.br/conteudos/LOL-Rumo-ao-Challenger.pdf";
	$headers = "From: $from";
	if (mail($to_email, $subject, $body, $headers)) {
	echo "Email enviado com sucesso para $to_email.";
	}	 else {
	echo "Falha no envio do email.";
	}
	fwrite($registro,"$nickname|$email|$selected\n");	
	fclose($registro);
	header("location: index.php");
}





?>

	<form action="index.php" method="POST">
		<div id="logo"><img src="./imagens/League_of_Legends_logo.png"></div>

		<p>Faça com que seu objetivo se cumpra. Cadastre-se agora e receba um e-book de como ir do Challenger ao Prata em apenas UM único dia.

		</p>
		<br>
		<div id="nickname" class="div-input">
			<label for="nickname">Nickname</label>
			<input required type="text" maxlength=8 pattern="[!@#^~*a-zA-Z]+" name="nickname">
			
		</div>
		<br>
		<div id="email" class="div-input">
			<label  for="email">Email</label>
			<input required type="email" name="email">
			
		</div>

		<div class="div-input">
			<input required type="radio" value="challenger" name="selected">
			<label for="challenger">Challenger</label>
		</div>

		<div class="div-input">
			<input required type="radio" value="diamante" name="selected">
			<label for="diamante">Diamante</label>
		</div>

		<div class="div-input">
			<input required type="radio" value="platina" name="selected">
			<label for="platina">Platina</label>
		</div>
		<div class="div-input">
			<input required type="radio" value="ouro" name="selected">
			<label for="ouro">Ouro</label>	
		</div>
		<br>
		<input type="submit" name="enviar" value="Enviar" id="enviar">
		<div id="poppy">
			<img src="imagens/poppy.png">
		</div>


		<footer>
			marcolanwilliam4@gmail.com &copy; 2021
		</footer>
	</body>
</html>
