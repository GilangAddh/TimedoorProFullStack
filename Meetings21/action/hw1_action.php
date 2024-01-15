<?php


// $anggrek = $_GET['anggrek'];
// $kamboja = $_GET['kamboja'];
// $lotus = $_GET['lotus'];

$anggrek = isset($_GET['anggrek']) ? $_GET['anggrek'] : 0;
$kamboja = isset($_GET['kamboja']) ? $_GET['kamboja'] : 0;
$lotus = isset($_GET['lotus']) ? $_GET['lotus'] : 0;

$bahan = 15000;
$upahtukang = 650;
$totaljalan = $anggrek + $kamboja + $lotus;
$totaltukang = $upahtukang * $totaljalan;
$totalbahan = $totaljalan * $bahan;
$totalharga = $totaltukang + $totalbahan;

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$costIsReady = true;
$color;
$teks;

if ($costIsReady) {
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
    <p>Untuk memperbaiki jalan sepanjang <?= $totaljalan; ?> di perumahan Graha Sentosa, diperlukan biaya sebesar <?= rupiah($totalharga); ?></p>
    <p style="color:<?= $color ?>"><?= $teks; ?></p>
</body>

</html>