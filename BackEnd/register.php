<?php
require_once "../Core/User.php";
require_once "../Core/DBC.php";
session_start();
if(empty($_POST["username"]) || empty($_POST["password"])){
    header('Location: index.php');
    exit();
}

$hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
$query = DBC::getConnection()->query("call adduser ('" . $_POST["username"] . "', '" . $hash . "')");

$username = $_POST["username"];
$_SESSION['username'] = $username;
$_SESSION["loggedin"] = true;
header('Location: ../FrontEnd/index.php');
?>