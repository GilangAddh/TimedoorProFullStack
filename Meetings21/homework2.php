<?php

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

    <form action="./action/hw2_action.php" method="get">
        <label for="unit"><b>Unit : </b></label>
        <label for="unit">KM</label>
        <input type="radio" name="unit" value="km">
        <label for="unit">M</label>
        <input type="radio" name="unit" value="m">
        <label for="unit">CM</label>
        <input type="radio" name="unit" value="cm">
        <br>
        <label for="anggrek">anggrek</label>
        <input type="number" name="anggrek">
        <br>
        <label for="kamboja">kamboja</label>
        <input type="number" name="kamboja">
        <br>
        <label for="lotus">lotus</label>
        <input type="number" name="lotus">
        <br>
        <label for="cashIsReady">Cash Is Ready?</label>
        <input type="checkbox" name="cashIsReady">
        <br>
        <button type="submit">Hitung</button>
    </form>
</body>

</html>