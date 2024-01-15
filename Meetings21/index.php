<?php
$isRain = true;
if ($isRain) {
    echo "Stay at home";
} else {
    echo "Go running";
}
echo "</br>";

$ball;
var_dump(isset($ball));
echo "</br>";

$ball = 123;
var_dump(isset($ball));
echo "</br>";

// echo "</br>";

$ball = null;
// var_dump(isset($ball));
// echo "</br>";

var_dump(is_null($ball));
echo "</br>";
var_dump($ball);

echo "</br>";
$ball = true;
var_dump(gettype($ball));
echo "</br>";

$midExam = 80;
$finalExam = 80;
$col = "red";
$grade;

if ($midExam > 85) {
    if ($finalExam > 85) {
        $grade = "You got A";
        $col = "blue";
    } else {
        $grade =  "You got B+";
        $col = "green";
    }
} else {
    $grade = "You got B";
    $col = "red";
}
echo "</br>";



$color = "green";
switch ($color) {
    case 'black';
        echo "It's Black";
        break;
    case 'red';
        echo "It's Red";
        break;
    case 'blue';
        echo "It's Blue";
        break;
    default;
        echo "Color not match";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="color:<?= $col ?>"><?= $grade; ?></p>
</body>

</html>