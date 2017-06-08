<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
</head>
<body>
	<?php
		$name = $_POST["user"];
		$_SESSION['name'] = $name;
		echo 'Bem vindo ' . '<strong>'. $_SESSION['name'] .'</strong>';
	?>
	<a href="index2.php"><input type="button" name="exit" value="Home"></a>
<br>
<br>
	<fieldset>
		<legend>Seus dados</legend>
			<?php
				echo 'Usuário: ' . $name .'<br>';
				echo 'E-mail: ' . $_POST["mail"] . '<br>';
			?>
	</fieldset>
</body>
</html>