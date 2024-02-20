<?php
$host = "127.0.0.1";
$dbname = "rosemary_corp";
$user = "root";
$password = "";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    print "Koneksi Berhasil";
} catch (PDOException $e) {
    print    "Error!" . $e->getMessage() . "<br>";
}
