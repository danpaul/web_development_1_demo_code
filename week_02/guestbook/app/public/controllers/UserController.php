<?php

require_once(__DIR__ . "/../models/UserModel.php");
require_once(__DIR__ . "/../dto/UserDTO.php");

class UserController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getAll(): array
    {
        return $this->userModel->getAll();
    }

    public function get(int $id): ?UserDTO
    {
        return $this->userModel->get($id);
    }
}
