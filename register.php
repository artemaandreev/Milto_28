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
        $res = $conn->query("SELECT `id` FROM `users` WHERE `login`= '". $_POST['login'] ."'");
        // узнаем количество строк, если не 0 - логин уже занят
        $result = $res->num_rows;
        if($result > 0) {
            echo 'Логин уже занят.';
        } else {
            $reg = $conn->query("INSERT INTO users (Familiya, Imya, Otchestvo, datarojdeniya, telefon, login, password) VALUES ('".$_POST['Familiya']."', '".$_POST['Imya']."', '".$_POST['Otchestvo']."', '".$_POST['datarojdeniya']."', '".$_POST['telefon']."', '".$_POST['login']."', '".$_POST['password']."')");
            
            echo 'Успешная регистрация.';
 header("Location: index.php");
        }
    } catch (Exception $e) {
        echo 'Не удалось зарегистрироваться.';
    }
    
    // Закрытие соединения
    mysqli_close($conn);
?>