<?php session_start();
require('funkcje.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
        <a href="index.php">Do indexu</a>
        <?php
            if($_SESSION["zalogowany"]!=1){header("Location: index.php");}
            if(isSet($_POST["zaloguj"])) {
                echo "Zalogowano";
                echo "Witaj " . $_SESSION["zalogowanyImie"];
            }
        ?>
        <form action="index.php" method="post">
            <input type="submit" name="wyloguj" value="wyloguj">Wyloguj</input>
        </form>
        <form action="user.php" method="post" enctype="multipart/form-data">
            <input name="myfile" type="file"><br>
            <input type="submit" value="Upload" name="Submit1">
        </form>
            <?php
            $currentDir =getcwd();
            $uploadDirectory="";
            $fileName=$_FILES['myfile']['name'];
            $fileSize=$_FILES['myfile']['size'];
            $fileTmpName=$_FILES['myfile']['tmp_name'];
            $fileType=$_FILES['myfile']['type'];
            if($fileName !="" and
                ($fileType =='image/jpeg' or $fileType == 'image/png'
                 or $fileType == 'image/JPEG' or $fileType=='image/PNG'
            ))
            {
                $uploadPath = $currentDir . $uploadDirectory . $fileName;
                if(move_uploaded_file($fileTmpName,$uploadPath))
                {
                    echo "<img src=\"" . $fileName ."\"/>";
                }
            }else{
                echo "Brak zdjecia.";
            }
            ?>   
	</body>
</html>