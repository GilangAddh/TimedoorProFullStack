<?php
$number1 = 5;
$number2 = 3;

$tambah = $number1 + $number2;
echo $tambah;
echo "</br>";

$kurang = $number1 - $number2;
echo $kurang;
echo "</br>";

$kali = $number1 * $number2;
echo $kali;
echo "</br>";

$bagi = $number1 / $number2;
echo $bagi;
echo "</br>";

$onedayhour = 24;
$oneweek = 7;
$onehourminutes = 60;

$onedayminutes = $onedayhour * $onehourminutes;
echo "one day is {$onedayminutes} minutes";
echo "</br>";

$modulus = $number1 % $number2;
echo "sisa bagi {$number1} dan {$number2} adalah {$modulus}";
echo "</br>";

$pangkat = $number1 ** $number2;
echo "hasil dari {$number1} pangkat {$number2} adalah {$pangkat}";
