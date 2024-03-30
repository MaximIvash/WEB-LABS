<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    $filename = "posts/{$category}/{$title}.txt";
    file_put_contents($filename, "{$email}\n{$text}");

    header("Location: task3.php");
} else
{
    echo "Ошибка: доступ запрещен.";
}

