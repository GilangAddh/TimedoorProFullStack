<?php
$nama = "Gilang Adhi Perkasa";
// echo $nama
$title = "What Is Coding";
$paragraf = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta aspernatur beatae doloribus sapiente optio quis error? Numquam beatae explicabo dicta reiciendis placeat fugit, modi illo velit ad id enim provident?";

$author = "Gilang Adhi";
$date = "10-11-2023";
$concat = "By" . " Gilang Adhi";
echo $concat;
$no = 1;
$rating = 4.5
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $title; ?></h1>
    <p><?= $paragraf ?></p>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Name</th>
            <th>Date</th>
            <th>Rating</th>
        </tr>
        <tr>
            <td><?= $no ?></td>
            <td><?= $title; ?></td>
            <td><?= $author; ?></td>
            <td><?= $date; ?></td>
            <td><?= $rating; ?></td>
        </tr>
    </table>
</body>

</html>