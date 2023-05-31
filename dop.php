<?php
header("Content-Type: text/plain");

$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];

echo $arr['Петя'] . PHP_EOL;
echo $arr['Коля'] . PHP_EOL;

$var = 10;
$var = $var++;
$var = $var++;
$var = $var--;
echo $var . PHP_EOL;

$str = '1234567890';
$arr = str_split($str, 2);
$str = implode('-', $arr);
var_dump($str);

$str = 'abc abc abc';
$result = stripos($str, 'b', 3);
echo $result . PHP_EOL;

function plus(int $a, int $b) {
    $result = $a + $b;
    if ($result > 10) {
        $result = 'true';
    } else {
        $result = 'false';
    }
    return $result;
}

$summ = plus(5,6);
echo $summ . PHP_EOL;

$str = '123456789';
$arr = str_split($str);
$result = array_sum($arr);
echo $result;