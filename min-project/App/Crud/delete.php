<?php
require '../Database/connect.php';
var_dump($_GET);    
$id = $_GET['id'];
try {
    
    $del = "DELETE FROM users WHERE id = $id";
    $stmt = $conn->prepare($del);
    $stmt->execute();
    echo 'testing';
    header("location: ../Pages/home.php");
} catch (Exception $e) {
    header('location: ../Pages/home.php');
    exit();
}



// $arr = [$_POST['username'], $_POST['email'], $_POST['password']];
// $sql = "DELETE FROM users WHERE ;";
// $stmt = $conn->prepare($sql);
// $stmt->execute($arr);
// header("location: ../Pages/home.php");