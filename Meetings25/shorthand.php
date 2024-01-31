<?php
$condition = "halo";

echo $condition ? "it's true" : "it's false";
echo "<br>";

$score = 80;
echo $score ?: "Nilai anda kosong";
echo "<br>";


$name = null;
echo isset($name) ? "hello {$name}" : "Hello User";
