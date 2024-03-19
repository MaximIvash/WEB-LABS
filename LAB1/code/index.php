<?php
echo "<pre>";

// Задание №1
echo "<h3>№1</h3>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= ", with big cola";

echo "\nYour order is: $very_bad_unclear_name.\n";
// Задание №2
echo "<h3>№2</h3>";
$int = 36;
echo $int;
echo "\n";

$float = 6.17;
echo $float;
echo "\n";

echo $int - 24;
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);
echo "\n";
// Задание №3
echo "<h3>№3</h3>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days/$num_languages;
echo "$days_per_language days\n";

