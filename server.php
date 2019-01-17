<?php
	
	$username = "";
	$email = "";
	$errors = array();


	//conectar ao banco de dados
	
	$db = mysqli_connect('localhost', 'root', '', 'registration');



	//Botão cadastrar pressionado
	if (isset($_POST['regiser'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$senha_1 = mysqli_real_escape_string($db, $_POST['senha_1']);
		$senha_2 = mysqli_real_escape_string($db, $_POST['senha_2']);

			if (empty($username)) {
				array_push($errors, "É necessário um usuário");
			}

			if (empty($email)) {
				array_push($errors, "É necessário um email");
			}

 			if (empty($senha_1)) {
				array_push($errors, "É necessário uma senha");
 			}

 			if ($senha_1 != $senha_2) {

 				array_push($errors, "As senhas não correspondem");
 			}

 		// Sem erros, salvar os dados do usuário no banco de dados


 			if (count($errors) == 0 ) {
 				$pass = md5($senha_1);
 				$sql= "INSERT INTO user (username, email, password)
 							 VALUES ('$username', '$email', '$pass')";
 				mysql_query("$db, $sql");
 			}


	}






?>