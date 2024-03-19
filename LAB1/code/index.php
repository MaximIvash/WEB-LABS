<?php
echo "<pre>";

// Задание №1
echo "<h3>№1</h3>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= ", with big cola";

echo "\nYour order is: $very_bad_unclear_name.\n";

