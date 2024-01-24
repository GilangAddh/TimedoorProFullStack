<?php
$examScore = [78, 77, 92, 84, 63, 80];
$total = 0;
for ($i = 0; $i < count($examScore); $i++) {
    $total  += $examScore[$i];
}
$total /= count($examScore)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exam Score Timedoor Academy</h1>
    <ol>
        <?php for ($i = 0; $i < count($examScore); $i++) {
            $student = $i + 1 ?>
            <li>Student <?= $student; ?>'s score is <?= $examScore[$i]; ?></li>
        <?php } ?>
        <p>Average of exam is <?= $total; ?></p>
    </ol>
</body>

</html>