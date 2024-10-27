<?php
require_once "app/controllers/Usercontroller.php";

$id = $_GET['id'];
$controller = new UserController();
$controller->delete($id);

?>
