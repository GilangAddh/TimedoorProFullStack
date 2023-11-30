<?php
$address = "Glascow, UK";
$bornDate = "31 December 1941";
$job = "Football Manager";
$bioTitle = "Biodata Of Sir Alex Fergusson";
$bioDesc = "A $job of Manchester United Football Club. He was born on $bornDate and live at $address."
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $bioTitle ?></title>
    <style>
        p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h1><?= $bioTitle ?></h1>
    <p><?= $bioDesc ?></p>
</body>

</html>