<?php
require '../Database/connect.php';
var_dump($_POST);
var_dump($_GET);

$data = [
            ':username' => $_POST['username'],
            ':email'    => $_POST['email'],
            ':password' => $_POST['password'],
            ':id'       => $_GET['id']
];
try {
    $upd = "UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id";
    $stmt = $conn->prepare($upd);
    $stmt->execute($data);
    echo 'testing';
    header("location: ../Pages/home.php");
} catch (Exception $e) {
    header('location: ../Pages/home.php');
    exit();
}