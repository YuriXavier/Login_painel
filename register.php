<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuário</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Cadastre-se, é grátis!</h2>

	</div>

	<form method="post" action="register.php"> 
		
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Identificação</label>		
			<input type="text" name="identificação">
		</div>

		<div class="input-group">
			<label>Email</label>		
			<input type="text" name="email">
		</div>

		<div class="input-group">
			<label>Senha</label>		
			<input type="password" name="senha_1">
		</div>

		<div class="input-group">
			<label>Confirmação Senha</label>		
			<input type="password" name="senha_2">
		</div>

		<div class="input-group">
			<button type="submit" name"registro" class="btn" >Cadastrar</button>
		</div>
		<p>Já é cadastrado? <a href="login.php">Faça o login</a></p>
	
	</form>



</body>
</html>