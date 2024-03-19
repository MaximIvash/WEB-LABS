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
