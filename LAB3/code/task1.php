<?php
echo"<pre>";
//1.a
$reg_1 = "/a..b/";
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($reg_1, $str1, $found);
echo "a)";
foreach($found[0] as $founded)
{
    echo $founded ." ";
}
echo "\n";

//1.b
$reg_2 = "/\d/";
$str2 = 'a1b2c3';
function cubing($digit)
{
    return pow($digit[0], 3);
}
echo "b)";
echo preg_replace_callback($reg_2, "cubing", $str2), "\n";