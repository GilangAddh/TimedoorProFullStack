<?php
$studentScore = [
    [
        "id" => 1220,
        "first_name" => "Lina",
        "last_name" => "Karolina",
        "gender" => "Female",
        "exam_score" => 78,
        "quiz_score" => 80
    ],
    [
        "id" => 1221,
        "first_name" => "Kidi",
        "last_name" => "Alan",
        "gender" => "Male",
        "exam_score" => 77,
        "quiz_score" => 79
    ],
    [
        "id" => 1222,
        "first_name" => "Amar",
        "last_name" => "Tanjung",
        "gender" => "Male",
        "exam_score" => 92,
        "quiz_score" => 85
    ],
    [
        "id" => 1223,
        "first_name" => "Pandu",
        "last_name" => "Ginanjar",
        "gender" => "Male",
        "exam_score" => 84,
        "quiz_score" => 84
    ],
    [
        "id" => 1224,
        "first_name" => "Lili",
        "last_name" => "Pertiwi",
        "gender" => "female",
        "exam_score" => 63,
        "quiz_score" => 81
    ],
    [
        "id" => 1225,
        "first_name" => "Wirni",
        "last_name" => "Asih",
        "gender" => "female",
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

function concateFullName(string $first, string $last): void
{
    $result = "{$first} {$last}";
    echo $result;
}

function finalScoreStatus(int $exam, int $quiz): void
{
    if ($exam >= 80 && $quiz >= 82) {
        echo "Passed";
    } else if ($exam > 80) {
        echo "Not passed, take a new quiz";
    } else if ($quiz > 80) {
        echo "Not passed, take the remedial exam";
    } else {
        echo "Not passed, try next semester!";
    }
}
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
    <ol>
        <?php foreach ($studentScore as $score) : ?>
            <li>
                <b>
                    <?php concateFullName($score['first_name'], $score['last_name']); ?>
                </b>, student with id <?= $score['id']; ?>. Your final score status is <?php finalScoreStatus($score['exam_score'], $score['quiz_score']) ?>
            </li>

        <?php endforeach ?>
    </ol>
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
            <th>Status</th>
        </tr>
        <?php foreach ($studentScore as $score) : ?>
            <tr>
                <td><?= $score['id']; ?></td>
                <td><?php concateFullName($score['first_name'], $score['last_name']) ?></td>
                <td><?= $score['exam_score']; ?></td>
                <td><?= $score['quiz_score']; ?></td>
                <td><?php finalScoreStatus($score['exam_score'], $score['quiz_score']) ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>