<?php
require_once "app/models/User.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $user = $this->userModel->getAllUsers();
        include "app/views/userView.php";
    }

    public function detail($id) {
        $user = $this->userModel->getUserById($id);
        include "app/userDetail.php";
    }

    public function create() {
        include "app/views/userForm.php";
    }

    public function store($name, $email) {
        $this->userModel->createUser($name, $email);
        header("Location: index.php");
    }

    public function edit($id) {
        $user = $this->userModel->getUserById($id);
        include "app/views/userForm.php";
    }

    public function update($id, $name, $email) {
        $this->userModel->updateUser($id, $name, $email);
        header("Location: index.php");
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header("Location: index.php");
    }
}
?>
