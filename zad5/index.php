<?php
	session_start();
	require('funkcje.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			if(isset($_POST["wyloguj"])) {$_SESSION["zalogowany"]=0;}
		?>
		<a href="user.php">Do usera</a>
		<form action="logowanie.php" method="post">
			<label for="login">Login:</label>
			<input type="text" name="login"></input><br>
			<label for="haslo">Hasło:</label>
			<input type="password" name="haslo"></input><br>
			<input type="submit" name="zaloguj" value="Zaloguj"></input>
		</form>
		<form action="cookie.php" method="get">
			<input type="number" name="czas"></input>
			<input type="submit" name="utworzCookie" value="Wyślij ciastko"></input>
		</form>
		<?php
			if(isset($_COOKIE["Kremowka"])) {
				echo "Mamy ciastko o wartości " . $_COOKIE["Kremowka"];}
		?>
	</body>
</html>