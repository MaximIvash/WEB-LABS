<?php
echo "<pre>";
// Задание №1
echo "<h3>№1</h3>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= ", with big cola";

echo "\nYour order is: $very_bad_unclear_name.";
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
//Задание №4
echo "<h3>№4</h3>";
echo 8**2;
echo"\n";
//Задание №5
echo "<h3>№5</h3>";
$my_num=3542;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "$answer \n";
//Задание №6
echo "<h3>№6</h3>";
$a=10;
$b=3;
echo $a % $b;
echo "\n";

if ($a % $b === 0)
{
    echo "Делится\n";
}
else
{
    echo "Делится с остатком\n";
}

$st = pow(2, 10);
echo "2^10=$st\n";
$qr = sqrt(245);
echo "sqrt(245)=$qr\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sumOfSquared = 0;
foreach ($arr as $value)
{
    $sumOfSquared += $value ** 2;
}
echo sqrt($sumOfSquared);
echo "\n";

echo round(sqrt(379), 0);
echo "\n";
echo round(sqrt(379), 1);
echo "\n";
echo round(sqrt(379), 2);
echo "\n";

$floor = floor(sqrt(587));
$ceil = ceil(sqrt(587));
$arr = array("floor"=>$floor, "ceil"=>$ceil);
echo "floor:" . $arr["floor"];
echo "\n";
echo "ceil:" . $arr["ceil"];
echo "\n";

$nums = [4, -2, 5, 19, -130, 0, 10];
echo "min = " .min($nums);
echo "\n";
echo "max = " .max($nums);
echo "\n";

echo "Random num (1-100) = " .rand(1, 100);
echo "\n";
$randArr = [];
for ($i = 0; $i < 10; $i++)
{
    $randArr[$i] = rand(1, 100);
}
foreach ($randArr as $value)
{
    echo $value . " ";
}
echo "\n";

$a = 66;
$b = 77;
$abs = abs($a - $b);
echo $abs;
echo "\n";

$arr= [1, 2, -1, -2, 3, -3];
foreach ($arr as $value)
{
    $value = abs($value);
    echo $value . " ";
}
echo "\n";

$num = 30;
$i = 1;
$arr1 = [];
while ($i <= $num)
{
    if(0 === $num% $i)
    {
        $arr1[] = $i;
    }
    $i++;
}
foreach ($arr1 as $value)
{
    echo $value . " ";
}
echo "\n";

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$numOfNums = 0;
while ($sum <= 10)
{
    $sum += $arr2[$numOfNums];
    $numOfNums += 1;
}
echo $numOfNums;
echo "\n";
//Задание №7
echo "<h3>№7</h3>";
function printStringReturnNumber()
{
    echo"Hello, there.\n";
    return strlen("Hello, there.");
}
$my_num = PrintStringReturnNumber();
echo $my_num;
echo "\n";
//Задание №8
echo "<h3>№8</h3>";
function increaseEnthusiasm($item)
{
    return "$item". "!";
}
$string = "Hello, there ";
echo increaseEnthusiasm($string);
echo "\n";
function repeatThreeTimes($string)
{
    return str_repeat($string, 3);
}
echo repeatThreeTimes($string);
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes($string));
echo "\n";

function cut($str, $num_of_simb = 10)
{
    return substr_replace($str, " ", $num_of_simb, strlen($str) - $num_of_simb);
}
echo cut($string, 3);
echo "\n";

$arr_for_task8=[1,20,17,35,-1,10];
function printArray($arr_for_task8, $i = 0)
{
    echo $arr_for_task8[$i]. ", ";
    if(array_key_last($arr_for_task8) > $i)
    {
        printArray($arr_for_task8, ++$i);
    }
}
printArray($arr_for_task8);
echo "\n";
function sum_of_numbers(int $num)
{
    $out = 0;
    while($num != 0 )
    {
        $out += $num % 10;
        $num = intdiv($num, 10);
    }
    if($out >= 10)
    {
        $out = sum_of_numbers($out);
    }
    return $out;
}
echo sum_of_numbers(43521);
echo "\n";
//Задание №9
echo "<h3>№9</h3>";
$arr_for_task9 = [];
for($i = 0; $i <= 10; $i++)
{
    $count = 0;
    $arr_for_task9[$i] = "x";
    while($count < $i)
    {
        $arr_for_task9[$i] .= "x";
        $count++;
    }
}
printArray($arr_for_task9);
echo "\n";
function arrayFill($value, int $amount)
{
    $res = [];
    for($i = 0; $i < $amount; $i++)
    {
        $res[$i] = $value;
    }
    return $res;
}

$arr_for_task9_2 = [[]];
for($i = 0; $i < rand(1, 10); $i++)
{
    for($j = 0; $j < rand(1, 10); $j++)
    {
        $arr_for_task9_2[$i][$j] = rand(1, 10);
    }
}
$res = 0;
for($i = 0; $i < array_key_last($arr_for_task9_2); $i++)
{
    for($j = 0; $j < array_key_last($arr_for_task9_2[$i]); $j++)
    {
        $res += $arr_for_task9_2[$i][$j];
    }
}
echo "Сумма элементов: ". $res;
echo "\n";

$arr_for_task9_3 = [2, 5, 3, 9];
for ($i = 0; $i < 2; $i++)
{
    $arr_for_task9_3[$i] *= $arr_for_task9_3[$i + 1];
}
$result = 0;
for ($i = 0; $i < count($arr_for_task9_3); $i++)
{
    $result += $arr_for_task9_3[$i];
}
echo $result;
echo "\n";

$user = [
    "name" => "Максим",
    "surname" => "Иващенко",
    "patronymic" => "Александрович"
];
echo "$user[surname] $user[name] $user[patronymic]";
echo "\n";

$date = [
    "year" => 2024,
    "month" => 3,
    "day" => 19
];
echo "$date[year]-$date[month]-$date[day]";
echo "\n";

$arr = ["a","b","c","d","e"];
echo count($arr);
echo "\n";
echo $arr[array_key_last($arr)];
echo "\n";
echo $arr[array_key_last($arr) - 1];
echo "\n";
//Задане №10
echo "<h3>№10</h3>";
function comparison($x, $y)
{
    if ($x + $y > 10)
    {
        return true;
    }
    return false;
}

function equality ($x, $y)
{
    if ($x === $y)
    {
        return true;
    }
    return false;
}

$test = rand(0,1);
if (!$test) echo "Верно";
echo "\n";
function Sum_num(int $num)
{
    $res = 0;
    while ($res != 0)
    {
        $res += $num % 10;
        $num = intdiv($num, 10);
    }
    return $res;
}

$age = 19;
if ($age < 10 or $age > 99)
{
    echo "Число меньше 10 или больше 99\n";
} else
{
    if (Sum_num($age) <= 9)
    {
        echo "Сумма цифр однозначна\n";
    } else
        echo "Сумма цифр двузначна\n";
}

$arr = [];
for ($i = 0; $i < rand(1, 10); $i++)
{
    $arr[$i] = rand(1, 10);
}
if (count($arr) == 3)
{
    $result = 0;
    for ($i = 0; $i < count($arr); $i++)
    {
        $result += $arr[$i];
    }
    echo "Сумма элементов: " . $result;
    echo "\n";
}
//Задание №11
echo "<h3>№11</h3>";
for($i = 1; $i <= 20; $i++)
{
    $count = 0;
    while($count++ < $i)
    {
        echo "x";
    }
    echo "\n";
}
//Задание №12
echo "<h3>№12</h3>";
$arr_for_task12 = [6,10,32,44,26,11,2,1,148];
echo "Среднее сначение: ".(array_sum($arr_for_task12) / count($arr_for_task12));
echo "\n";
echo "Сумма чисел от 1 до 100: ".array_sum(range(1, 100));
echo "\n";

$arr_for_task12_2 = [4,16,256];
$arr_for_task12_3 = array_map("sqrt", $arr_for_task12_2);
echo "Массив с квадратными корнями:";
foreach ($arr_for_task12_3 as $value)
{
    echo $value . " ";
}
echo"\n";

$arr_for_task12_4 = array_combine(range('a', 'z'), range(1, 26));

$str_nums = "1234567890";
$couples = str_split($str_nums, 2);
echo "Сумма пар: ", array_sum($couples);
