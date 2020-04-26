<?php
    session_start();
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");

    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if (isset($_POST['id_prac']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko']))
    {
        $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
        $result = $stmt->execute();
        if (!$result) {
            printf("Query failed: %s\n", mysqli_error($link));
            $_SESSION['message'] = "Błąd dodania pracownika!\n";
        }else {
            $_SESSION['message'] = "Dodano pracownika!\n";}
        $stmt->close();

        header("Location: form06_get.php");
    }else{
        $_SESSION['message'] = "Podano błędne dane pracownika.\n";
        header("Location: form06_post.php");
    }
    $result->free();
    $link->close();
?>