<?php
require '../Database/connect.php';
// echo 'test';
$sql = "SELECT id, username, email FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);



function getOne($var, $conn) {
    $sql = "SELECT id, username, email FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}   