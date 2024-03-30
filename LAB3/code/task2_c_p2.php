<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вывод данных из сессии</title>
</head>
<body>
<h1>Данные из сессии:</h1>
<ul>
    <?php
    $user_data = $_SESSION["user_data"];

    foreach ($user_data as $key => $value)
    {
        echo "<li>$key: $value</li>";
    }
    ?>
</ul>
</body>
</html>