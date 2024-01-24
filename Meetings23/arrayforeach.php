<?php
$studentScore = [80, 85, 88, 90, 82];
$studentScoreAssoc = [
    "Anwar" => 85,
    "Bayu" => 88,
    "Cepi" => 80,
    "Dafa" => 83
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>For Loop Indexed Array</h1>
    <?php foreach ($studentScore as $score) { ?>
        <p>Student score is <?= $score; ?></p>
    <?php } ?>
    <hr>
    <h1>For Loop Indexed Array</h1>
    <?php foreach ($studentScoreAssoc as $key => $value) { ?>
        <p><?= $key; ?> score is <?= $value; ?></p>
    <?php } ?>
</body>

</html>