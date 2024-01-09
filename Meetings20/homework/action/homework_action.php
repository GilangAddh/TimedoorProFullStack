<?php
$anggrek = $_GET['anggrek'];
$kamboja = $_GET['kamboja'];
$lotus = $_GET['lotus'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Panjang Jalan Anggrek Adalah <?= $anggrek; ?> KM</p>
    <p>Panjang Jalan Kamboja Adalah <?= $kamboja; ?> M</p>
    <p>Panjang Jalan Lotus Adalah <?= $lotus; ?> CM</p>
</body>

</html>