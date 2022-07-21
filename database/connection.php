<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "smartfridgedb";

$connection = mysqli_connect($server, $user, $pass, $dbname) or die("Connection error");
