<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["text"]))
{
    $text = $_POST["text"];

    $words_count = str_word_count($text);
    $chars_count = strlen($text);

    echo "Количество слов в тексте: $words_count<br>";
    echo "Количество символов в тексте: $chars_count<br>";
}
?>
Форма для ввода текста
<form method="post">
    <textarea name="text"></textarea>
    <input type = "submit" value="Подсчитать" />
</form>
