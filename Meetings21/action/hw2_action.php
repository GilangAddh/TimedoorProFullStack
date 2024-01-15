<?php

$anggrek = $_GET['anggrek'];
$kamboja = $_GET['kamboja'];
$lotus = $_GET['lotus'];
$cashIsReady = isset($_GET['cashIsReady']) ? $_GET['cashIsReady'] : 0;;
$unit = $_GET['unit'];
var_dump(is_null($cashIsReady));
$color;
$teks;

$totaljalan = $anggrek + $kamboja + $lotus;

switch ($unit) {
    case "km";
        $totaljalan *= 1000;
        break;
    case "m";
        $totaljalan = $totaljalan;
        break;
    case "cm";
        $totaljalan /= 100;
        break;
}

$bahan = 15000;
$upahtukang = 650;
$totaltukang = $upahtukang * $totaljalan;
$totalbahan = $totaljalan * $bahan;
$totalharga = $totaltukang + $totalbahan;


if ($cashIsReady) {
    $teks = "The project will be implemented soon!";
    $color = "green";
} else {
    $teks = "The project implementation will be postponed until funds are available.";
    $color = "red";
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
    <h1>Calculating Project Cost</h1>
    <p>Untuk memperbaiki jalan sepanjang <?= $totaljalan; ?> di perumahan Graha Sentosa, diperlukan biaya sebesar <?= $totalharga; ?></p>
    <p style="color:<?= $color ?>"><?= $teks; ?></p>
</body>

</html>