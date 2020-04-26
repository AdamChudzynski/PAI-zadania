<html>
    <a href="form06_post.php">Dodaj nowego pracownika</a><br>
<?php
    session_start();
    if(!empty($_SESSION['message'])){
        echo $_SESSION['message'];
        session_unset();
    }
?>
<br>
<?php
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v) {
        echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
    }
    $result->free();

    $link->close();
?>
</html>