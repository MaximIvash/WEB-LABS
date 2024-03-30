<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user_data = [
        "Имя" => $_POST["name"],
        "Возраст" => $_POST["age"],
        "Зарплата" => $_POST["salary"],
        "Любимый исполнитель" => $_POST["fav_artist"]
    ];

    $_SESSION["user_data"] = $user_data;
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
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="text" name="age"><br>
    Зарплата: <input type="text" name="salary"><br>
    Любимый исполнитель: <input type="text" name="fav_artist"><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>