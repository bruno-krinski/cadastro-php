<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Usuário cadastrado</title>
	</head>
	<body>
		<?php 
		  $nome = $_POST["name"];
		  $email = $_POST["email"];
            
		  $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "cadastro";
		  $conn = new mysqli($servername, $username, $password, $dbname);
		  
		  if($conn->connect_error){
		      die("Não foi possível contectar com o servidor: ".$conn->connect_error);
		  }
		  
		  $sql = "insert into users values('$nome','$email','default')";
		  
		  if($conn->query($sql) === TRUE){
		      echo "Usuário de nome $nome e e-mail $email foi cadastrado com sucesso!<br>";
		  } else {
		      echo "Erro: " . $sql . "<br>" . $conn->error;
		  }
		  $conn->close();
		?>
		<a href="index.php">Cadastrar novo usuários?</a>
	</body>
</html>