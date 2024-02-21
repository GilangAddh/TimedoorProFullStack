<?php
require 'helper/connection.php';

$id = $_GET['id'];
$queryFetch = "SELECT * FROM record WHERE id = ?";
$prepareQuery = $connection->prepare($queryFetch);
$prepareQuery->execute([$id]);
$fetch = $prepareQuery->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Record</title>
</head>

<body>
    <h3>Form Edit</h3>
    <form action="helper/update.php?id=<?= $fetch['id']; ?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= $fetch["name"]; ?>">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" value="<?= $fetch["age"]; ?>">
        </div>
        <div>
            <label for="gender">Select Gender</label>
            <br>

            <input type="radio" name="gender" value="Male" <?php if ($fetch['gender'] == 'Male') echo 'checked'; ?>>
            <label for="m">Male</label>
            <br>

            <input type="radio" name="gender" value="Female" <?php if ($fetch['gender'] == 'Female') echo 'checked'; ?>>
            <label for="f">Female</label>
        </div>
        <div>
            <label for="height">Height</label>
            <input type="number" name="height" value="<?= $fetch["height"]; ?>">
        </div>
        <div>
            <label for="weight">Weight</label>
            <input type="number" name="weight" value="<?= $fetch["weight"]; ?>">
        </div>
        <div>
            <label for="waist">Waist Size</label>
            <input type="number" name="waist" value="<?= $fetch["waist_size"]; ?>">
        </div>
        <div>
            <a href="./index.php">Back</a>
            <button type="submit">Edit</button>
        </div>
    </form>
</body>

</html>