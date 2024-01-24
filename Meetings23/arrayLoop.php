<?php
$studentScore = [80, 85, 88, 90, 82];
$studentScoreM = [
    [81, 83, 88],
    [88, 75, 82],
    [84, 77, 84]
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
    <h1>For Loop Index Array</h1>
    <?php for ($i = 0; $i < count($studentScore); $i++) {
        $studentIndex = $i + 1 ?>
        <p>Student <?= $studentIndex; ?> score is <?= $studentScore[$i]; ?></p>
    <?php } ?>
    <hr>
    <h1>For Loop Multidimension Array</h1>
    <?php for ($i = 0; $i < count($studentScoreM); $i++) {
    ?>
        <?php for ($j = 0; $j < count($studentScoreM[$i]); $j++) {
            $score = $studentScoreM[$i][$j];
        ?>
            <p>Student Row <?= $i; ?> Col <?= $j; ?> Is $score</p>

        <?php } ?>

    <?php } ?>
</body>

</html>