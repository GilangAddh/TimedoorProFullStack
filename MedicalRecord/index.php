<?php

require './helper/connection.php';

$fetchAllQuery = "SELECT * FROM record";
$prepareFetchAllQuery = $connection->prepare($fetchAllQuery);
$prepareFetchAllQuery->execute();
$record = $prepareFetchAllQuery->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 8px;
        }
    </style>
</head>

<body>
    <h1>Body Mass Index and Relative Fat Mass Category Calculator</h1>

    <a href="./create.php">Insert Data</a>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Waist Size</th>
            <th>BMI Score</th>
            <th>BMI Category</th>
            <th>RFM Score</th>
            <th>RFM Category</th>
            <th>Action</th>
        </tr>
        <?php foreach ($record as $key => $value) { ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value['name']; ?></td>
                <td><?= $value['age']; ?></td>
                <td><?= $value['gender']; ?></td>
                <td><?= $value['height']; ?></td>
                <td><?= $value['weight']; ?></td>
                <td><?= $value['waist_size']; ?></td>
                <td><?= $value['bmi_score']; ?></td>
                <td><?= $value['bmi_category']; ?></td>
                <td><?= $value['rfm_score']; ?></td>
                <td><?= $value['rfm_category']; ?></td>
                <td>
                    <a href="./edit.php?id=<?= $value['id']; ?>">Edit</a>
                    <a href="./helper/delete.php?id=<?= $value['id']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>