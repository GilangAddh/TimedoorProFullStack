<?php
require 'config.php';

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
