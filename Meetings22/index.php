<?php
//Operator Perbandingan
$numA = 10;
var_dump($numA == "10");
echo "<br>";
var_dump($numA === "10");
echo "<br>";
var_dump($numA < 9);
echo "<br>";
var_dump($numA > 9);
echo "<br>";

//Operator Logika
$isHungry = true;
$isHaveFood = true;

var_dump($isHungry && $isHaveFood);
echo "<br>";
var_dump($isHungry || $isHaveFood);
echo "<br>";
var_dump(!$isHungry);
echo "<hr>";


// $score = 75;
// $grade;
// if ($score >= 90) {
//     $label = "Your Grade Is A";
// } else if ($score >= 80) {
//     $label = "Your Grade Is B";
// } else if ($score >= 70) {
//     $label = "Your Grade Is C";
// } else {
//     $label = "Your Grade Is D";
// }
// echo $label;

$score = 80;
$absen = 80;
$label;
if ($score >= 90 && $absen >= 90) {
    $label = "Your Grade Is A+";
} elseif ($score >= 90 || $absen >= 90) {
    $label = "Your Grade Is A";
} else {
    $label = "Your Grade Is B";
}
echo $label;
