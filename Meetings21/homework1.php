<?php


$anggrek = isset($_GET['anggrek']) ? $_GET['anggrek'] : 0;
$kamboja = isset($_GET['kamboja']) ? $_GET['kamboja'] : 0;
$lotus = isset($_GET['lotus']) ? $_GET['lotus'] : 0;
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

    <form action="./action/hw1_action.php" method="get">
        <label for="anggrek">anggrek</label>
        <input type="number" name="anggrek">
        <br>
        <label for="kamboja">kamboja</label>
        <input type="number" name="kamboja">
        <br>
        <label for="lotus">lotus</label>
        <input type="number" name="lotus">
        <br>
        <button type="submit">Hitung</button>
    </form>
</body>

</html>