<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Record</title>
</head>

<body>
    <h3>Form Input</h3>
    <form action="./helper/insert.php" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age">
        </div>
        <div>
            <label for="gender">Select Gender</label>
            <br>

            <input type="radio" name="gender" value="Male">
            <label for="m">Male</label>
            <br>

            <input type="radio" name="gender" value="Female">
            <label for="f">Female</label>
        </div>
        <div>
            <label for="height">Height</label>
            <input type="number" name="height">
        </div>
        <div>
            <label for="weight">Weight</label>
            <input type="number" name="weight">
        </div>
        <div>
            <label for="waist">Waist Size</label>
            <input type="number" name="waist">
        </div>
        <div>
            <a href="./index.php">Back</a>
            <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>