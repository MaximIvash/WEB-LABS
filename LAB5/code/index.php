<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Доска объявлений</title>
</head>
<body>
<h1>AnyTech.com</h1>

<h2>Добавить объявление</h2>
<form action="add_post.php" method="post">
    Email: <input type="email" name="email" required><br>
    Категория:
    <select name="category">
        <option value="Aвтомобили">Автомобили</option>
        <option value="Мототехника">Мототехника</option>
        <option value="Запчасти">Запчасти</option>
    </select><br>
    Заголовок объявления: <input type="text" name="title" required><br>
    Текст объявления: <textarea name="text" required></textarea><br>
    <input type="submit" value="Добавить">
</form>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>
    <?php
    $mysqli = new mysqli('db', 'root', 'helloworld', 'web');
    if (mysqli_connect_errno()) {
        printf('Подключение к серверу MySQL невозможно. Код ошибки: $s\n', mysql_connect_error());
        exit;
    }
    $adds = $mysqli->query('SELECT email, title, text, category FROM ad');
    while ($row = $adds->fetch_assoc()) {?>
        <tr>
            <?php
            foreach(['category', 'email', 'title', 'text'] as $item) {?>
                <td><?php echo $row[$item];?></td>
                <?php
            }?>
        </tr>
        <?php
    }
    $adds->close();
    $mysqli->close();
    ?>
</table>
</body>
</html>
