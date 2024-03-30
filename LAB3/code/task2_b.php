<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма для ввода данных</title>
</head>
<body>
<h1>Введите данные:</h1>
<form method="post" action="">
    Фамилия: <input type="text" name="surname"><br>
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="text" name="age"><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>