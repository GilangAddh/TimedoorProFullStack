<?php
function sayHello(): void
{
    echo "Wellcome User";
    echo "<br>";
}

function sayHelloUser(string $name = "-"): void
{
    echo "Wellcome {$name}";
    echo "<br>";
    return;
}

function sumCalc(int $a, int $b = 0): int
{
    $total = $a + $b;
    return $total;
}

function minCalc(int $a, int $b): float
{
    $total = $a - $b;
    return $total;
    echo "Test";
}

sayHello();
sayHello();

sayHelloUser("Gilang");
sayHelloUser("");

$hasil = sumCalc(12);
echo $hasil;
echo sumCalc(10, 20);
echo "<br>";
echo sumCalc(12, 12);
echo "<br>";


$hasil = minCalc(20, 5);
echo $hasil;
// echo "<br>";
