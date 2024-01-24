<?php
for ($i = 0; $i < 3; $i++) {
    echo "perulangan ke {$i} </br>";
}
echo "<hr>";
$i = 0;
while ($i < 9) {
    echo "Perulangan ke {$i} </br>";
    $i++;
}
echo "<hr>";
$i = 0;
do {
    echo "Perulangan ke {$i} </br>";
    $i++;
} while ($i < 9);
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>For Loop In HTML Structure</h1>
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <p>Perulangan For Ke-<?= $i; ?></p>
    <?php } ?>
</body>

</html>