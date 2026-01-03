<?php 
$host ="127.0.0.1";
$dbname ="plan_action";
$user = "root";
$pass ="";


$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo '<br> la matconctatch' .$e->getMessage();
}