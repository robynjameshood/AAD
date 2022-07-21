<?php
require ("connection.php");

$quantity = null;
$name = null;
$value = null;
$option = null;
$removequantity = null;





if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
}

if (isset($_POST['status'])) {
    $value = $_POST['status'];
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}

if (isset($_GET['option'])) {
    $option = $_GET['option'];
}

if (isset($_GET['removequantity'])) {
    $removequantity = $_GET['removequantity'];
}

if ($value == "delivered") {
    $query = $connection->prepare("update items SET quantity = quantity + ? WHERE name = ?");
    $query->bind_param('is', $quantity, $name);
    $query->execute();
    header("Location: ../delivery-checklist.php");


}

if ($option === "remove") {
    $query = $connection->prepare("update items SET quantity = quantity - ? WHERE name = ? and ? > 0");
    $query->bind_param('isi', $removequantity, $name, $removequantity);
    $query->execute();
    header("Location: ../fridge-items.php");

}
