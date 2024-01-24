<?php
$studentScore = [
    [
        "id" => 1220,
        "name" => "Lina",
        "exam_score" => 78,
        "quiz_score" => 80
    ],
    [
        "id" => 1221,
        "name" => "Kidi",
        "exam_score" => 77,
        "quiz_score" => 79
    ],
    [
        "id" => 1222,
        "name" => "Amar",
        "exam_score" => 92,
        "quiz_score" => 85
    ],
    [
        "id" => 1223,
        "name" => "Pandu",
        "exam_score" => 84,
        "quiz_score" => 84
    ],
    [
        "id" => 1224,
        "name" => "Lili",
        "exam_score" => 63,
        "quiz_score" => 81
    ],
    [
        "id" => 1225,
        "name" => "Wirni",
        "exam_score" => 80,
        "quiz_score" => 91
    ],
];
$examAverage = 0;
$quizAverage = 0;
for ($i = 0; $i < count($studentScore); $i++) {
    $examAverage += $studentScore[$i]['exam_score'];
    $quizAverage += $studentScore[$i]['quiz_score'];
}

$examAverage /= count($studentScore);
$quizAverage /= count($studentScore);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td {
            padding: 4px;
        }
    </style>
</head>

<body>
    <h1>Final Score Timedoor Academy</h1>
    <?php foreach ($studentScore as $score) : ?>
        <p>Student with id <?= $score['id']; ?> named <?= $score['name']; ?>, got Exam Score = <?= $score['exam_score']; ?> and Quiz Score = <?= $score['quiz_score']; ?></p>

    <?php endforeach ?>
    <br>
    <hr>
    <br>

    <h1>Final Score Timedoor Academy</h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Exam Score</th>
            <th>Quiz Score</th>
        </tr>
        <?php foreach ($studentScore as $score) : ?>
            <tr>
                <td><?= $score['id']; ?></td>
                <td><?= $score['name']; ?></td>
                <td><?= $score['exam_score']; ?></td>
                <td><?= $score['quiz_score']; ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>