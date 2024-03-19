<?php
    try {
        $host = "127.0.0.1";
        $username = "root";
        $database = "examen";
        $pass = "";
        $conn = new mysqli($host, $username, $pass, $database);
        // Проверка соединения
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $res =  $conn->query("SELECT `login` FROM `users` WHERE `login`='" . $_POST['login'] . "' AND `password` = '" . $_POST['password'] . "'");
        if ($result = $res->num_rows > 0) {
            echo 'Вы успешно вошли!';
 header("Location: main.php");
        } else {
            echo 'Не удалось авторизироваться.';
        }
    } catch (Exception $e) {
        echo 'Не удалось авторизироваться.';
    }
    
    // Закрытие соединения
    mysqli_close($conn);
?>