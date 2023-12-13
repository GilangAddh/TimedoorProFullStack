<?php
$anggrek = 800;
$kamboja = 500;
$lotus = 25;

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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Calculation</title>
</head>

<body>
    <h1>Calculating Project Cost</h1>
    <p>Untuk memperbaiki jalan sepanjang <?= $totaljalan; ?> di perumahan Graha Sentosa, diperlukan biaya sebesar <?= rupiah($totalharga); ?></p>

</body>

</html>