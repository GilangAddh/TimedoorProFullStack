<?php
require_once "class/connection.php";

$config = [
    'host' => "127.0.0.1",
    'database' => "rosemary_corp",
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

// $query = $connection->query("SELECT * FROM product;");
// $product = $query->fetchAll();
// print_r($product);

// $userInput = "2";
// $query = "SELECT * FROM product WHERE id = ?;";
// $prepareQuery = $connection->prepare($query);
// $prepareQuery->execute([$userInput]);
// print_r($tes = $prepareQuery->fetch());

#SELECT ID
// $userInput = '3';
// $selectedQuery = "SELECT * FROM product WHERE id = ?;";
// $prepareQuery = $connection->prepare($selectedQuery);
// $prepareQuery->execute([$userInput]);
// $product = $prepareQuery->fetch();
// print_r($product);

#INSERT
// $insertQuery = "INSERT INTO product (name, unit, stock, price) VALUES (?,?,?,?);";
// $userInput = ["paper", "kg", "200", "10"];
// $prepareQuery = $connection->prepare($insertQuery);
// $insert = $prepareQuery->execute($userInput);

#UPDATE
$userInput = [300, 150, 7];
$updateQuery = "UPDATE product SET stock=?, price=? WHERE id = ?";
$prepareQuery = $connection->prepare($updateQuery);
$update = $prepareQuery->execute($userInput);

//header("Location: ../Meetings26/oop.php");
