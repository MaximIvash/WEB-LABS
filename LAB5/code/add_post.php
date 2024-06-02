<?php

function redirectToHome(): void {
    header('Location: /');

    exit();
}


if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['text'])) {

    redirectToHome();
}


$mysqli = new mysqli('db', 'root', 'helloworld', 'web');
if (mysqli_connect_errno()) {
    printf('Подключение к серверу MySQL невозможно. Код ошибки: $s\n', mysql_connect_error());
    exit;
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$text = $_POST['text'];

$mysqli->query(sprintf("INSERT INTO ad (email, title, text, category) VALUES ('%s', '%s', '%s', '%s');", $email, $title, $text, $category));

redirectToHome();