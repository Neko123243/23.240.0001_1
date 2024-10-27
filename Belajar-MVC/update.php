<?php
require_once "app/controllers/Usercontroller.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$controller = new UserController();
$controller->update($id, $name, $email);
header("Location: index.php");
?>
