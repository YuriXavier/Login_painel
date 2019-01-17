<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuário</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registro</h2>

	</div>

	<form method="post" action="login.php"> 
		<div class="input-group">
			<label>Identificação</label>		
			<input type="text" name="identificação">
		</div>

				<div class="input-group">
			<label>Senha</label>		
			<input type="password" name="senha_1">
		</div>

				<div class="input-group">
			<button type="submit" name="login" class="btn" >Login</button>
		</div>
		<p>Não é cadastrado? <a href="register.php">Cadastre-se </a></p>
	
	</form>



</body>
</html>