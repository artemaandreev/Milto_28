<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #003;
      color: white;
      padding: 10px;
      text-align: center;
    }
    nav {
      background-color: #555;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 5px 10px;
    }
    .container {
      margin: 20px auto;
      max-width: 800px;
      padding: 20px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="password"], input[type="date"], input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<header>
    <h1>Olimpiada</h1>
  </header>



      <?php
        $host = "127.0.0.1";
        $username = "root";
        $database = "examen";
        $pass = "";
        $conn = new mysqli($host, $username, $pass, $database);
        // Проверка соединения
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Выполнение запроса
        $sql = "SELECT id, name, message FROM blog";
        $result = mysqli_query($conn, $sql);
        
        /* Обработка результатов запроса
        if (mysqli_num_rows($result) > 0) {
            // выводим данные каждой строки
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div>";
                echo "<h3 class='animal-name'>" . $row["name"] . "</h3>";
                echo "<p class='animal-info'>" . $row["message"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Не найдено новостей";
        } */

        // Закрытие соединения
        mysqli_close($conn);
      ?>
    <h2 align="center">Регистрация</h2>
      <form action="register.php" method="POST">
      <label for="lastname">Фамилия:</label>
      <input type="text" name="Familiya" required>
      <label for="firstname">Имя:</label>
      <input type="text" name="Imya" required>
      <label for="middlename">Отчество:</label>
      <input type="text" name="Otchestvo" required>
      <label for="birthdate">Дата рождения:</label>
      <input type="date" name="datarojdeniya" required>
      <label for="phone">Телефон:</label>
      <input type="text" name="telefon" required>
      <label for="username_reg">Логин:</label>
      <input type="text" name="login" required>
      <label for="password_reg">Пароль:</label>
      <input type="password" name="password" required>
      <input type="submit" value="Зарегистрироваться">
    </form>
    <p align="center"><a href="index.php">Вернуться к авторизации</a></p>

</html>