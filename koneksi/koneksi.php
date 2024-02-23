<?php

$host = "localhost";
$dbname = "data";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo $e->getMessage();
}
session_start();

$hostToRoot = "http://localhost/UNIBOOKSTORE/";
$title = "UNIBOOKSTORE";
