<?php
require './class/Person.php';

$objPerson = new Person;

function inputChecker(string $inputName, $defaultValue): ?string
{
    return isset($_GET[$inputName]) ? $_GET[$inputName] : $defaultValue;
}

$objPerson->name = inputChecker('name', $objPerson->name);
$objPerson->age = (int)inputChecker('age', $objPerson->age);
$objPerson->gender = inputChecker('gender', $objPerson->gender);
$objPerson->height = (float)inputChecker('height', $objPerson->height);
$objPerson->weight = (float)inputChecker('weight', $objPerson->weight);
$objPerson->waistSize = (float)inputChecker('waist', $objPerson->waistSize);
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

    <h3>Form Input</h3>
    <form action="">
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

            <input type="radio" name="gender" value="m">
            <label for="m">Male</label>
            <br>

            <input type="radio" name="gender" value="f">
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
            <button type="submit">Count</button>
        </div>
    </form>
    <ul>
        <li>Name : <?= $objPerson->name; ?></li>
        <li>Age : <?= $objPerson->age; ?></li>
        <li>Gender : <?= $objPerson->gender; ?></li>
        <li>Height : <?= $objPerson->height; ?></li>
        <li>Weight : <?= $objPerson->weight; ?></li>
        <li>Waist Size : <?= $objPerson->waistSize; ?></li>
    </ul>
</body>

</html>