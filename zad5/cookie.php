<?php session_start();
require('funkcje.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
        <a href="index.php">Powrót</a>
        <?php
            if(isset($_GET["utworzCookie"]))
            {
                setcookie("Kremowka", "421", time() + $_GET["czas"], "/");
                echo "Dodano ciasteczko";
            }
        ?>
	</body>
</html>