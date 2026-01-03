<?php
require '../Database/connect.php';

echo '<pre>';
var_dump($_POST);
echo '</pre>';


//that is function  that is check if the user enter data or not
if (isset($_POST['password']) || empty($_POST['email']))
    {
    $arr = [$_POST['username'], $_POST['email'], $_POST['password']];
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    header("location: ../Pages/home.php");
    }




