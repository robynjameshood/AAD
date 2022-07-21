<?php
session_start();
include ("../database/connection.php");
$password = null;
$eMail = null;
$level = null;
$chef = null;

if (isset($_POST['email'])) {
    $eMail = $_POST['email'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_GET['option'])) {
    $option = $_GET['option'];
}

if (isset($_GET['level'])) {
    $level = $_GET['level'];
}

if (isset($_GET['chef'])) {
    $level = $_GET['chef'];
}

$_SESSION['username'] = $eMail;
$_SESSION['level'] = $level;
$_SESSION['chef'] = $chef;

switch ($option) {
    case 1: // chef login
        $query = $connection->prepare("SELECT * FROM users WHERE email = ? AND  password = ?");
        $query->bind_param('ss', $eMail, $password);
        $query->execute();

        $result = $query->fetch();
        $query->close();

        if ($result == 1)
        {
            $_SESSION['user'] = "chef";
            $_SESSION['level'] = "admin";
            header("Location: ../dashboard.php");
        }
        else {
            header("Location: ../chef-login.html");
        }
        break;
    case 2: // delivery login
        $query = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $query->bind_param('ss', $eMail, $password);
        $query->execute();

        $result = $query->fetch();
        $query->close();

        if ($result == 1)
        {
            header("Location: ../deliverydashboard.php");
        }
        else {
            header("Location: ../delivery-login.html");
        }
        break;   
    default:
        break;



}