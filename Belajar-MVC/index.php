<?php
require_once 'app/controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action']) && $_GET['action'] == 'detail' && isset($_GET['id'])) {
    $controller->detail($_GET['id']);
} else {
    $controller->index();
}
?>
