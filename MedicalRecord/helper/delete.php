<?php
require 'connection.php';

$id = $_GET['id'];
echo $id;
$deleteQuery = "DELETE FROM record WHERE id = ?";
$preparedQuery = $connection->prepare($deleteQuery);
$delete = $preparedQuery->execute([$id]);

header("Location: ../index.php");
