<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
        <?php
        if(isset($_POST["zaloguj"]))
        {
            if($_POST["login"]=="adam" && $_POST["haslo"]=="adam2020") {
                $_SESSION["zalogowanyImie"] = "Adam Kowalski";
                $_SESSION["zalogowany"] = 1;
				header("Location: user.php");
			}else if($_POST["login"]=="agata" && $_POST["haslo"]=="2020agata") {
                $_SESSION["zalogowanyImie"] = "Agata Nowak";
                $_SESSION["zalogowany"] = 1;
				header("Location: user.php");
            }else {header("Location: index.php");}
        }
        ?>
	</body>
</html>