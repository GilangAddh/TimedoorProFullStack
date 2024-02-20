<?php
require './config.php';

$config = [
    'host' => "127.0.0.1",
    'database' => "medical_record",
    'user' => "root",
    'password' => "",
];

$mysqlConnection = new MySQLConnection(
    $config['host'],
    $config['database'],
    $config['user'],
    $config['password']
);
$connection = $mysqlConnection->getConnection();

require './../class/Person.php';
require './../class/BodyMassIndex.php';
require './../class/RelativeFatMass.php';
$objPerson = new Person;
$bmi = new BodyMassIndex;
$rfm = new RelativeFatMass;

function inputChecker(string $inputName, $defaultValue): ?string
{
    return isset($_POST[$inputName]) ? $_POST[$inputName] : $defaultValue;
}

$objPerson->bio(
    inputChecker('name', $objPerson->name),
    inputChecker('age', $objPerson->age),
    inputChecker('gender', $objPerson->gender)
);

$objPerson->bodyFact(
    inputChecker('height', $objPerson->height),
    inputChecker('weight', $objPerson->weight),
    inputChecker('waist', $objPerson->waistSize)
);

$bmi->calculate(
    inputChecker('height', $objPerson->height),
    inputChecker('weight', $objPerson->weight),
);
$bmi->determineCategory();

$rfm->calculate(
    $objPerson->height,
    $objPerson->waistSize,
    $objPerson->gender
);
$rfm->determineCategory($objPerson->gender);

print_r($objPerson);
print_r($bmi);
print_r($rfm);

$inserQuery = "INSERT INTO record (name, age, gender, height, weight, waist_size, bmi_score, bmi_category, rfm_score, rfm_category) VALUES (?,?,?,?,?,?,?,?,?,?)";
$userInput = [$objPerson->name, $objPerson->age, $objPerson->gender, $objPerson->height, $objPerson->weight, $objPerson->waistSize, $bmi->score, $bmi->category, $rfm->score, $rfm->category];
echo "<br>";
print_r($userInput);
$prepareQuery = $connection->prepare($inserQuery);
$insert = $prepareQuery->execute($userInput);
header("Location: ../index.php");
