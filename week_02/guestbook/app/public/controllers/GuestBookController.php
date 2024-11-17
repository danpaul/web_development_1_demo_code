<?php

require_once(__DIR__ . "/../models/GuestBookModel.php");
require_once(__DIR__ . "/../dto/UserDTO.php");

class GuestBookController
{

    private $guestBookModel;
    public function __construct()
    {
        $this->guestBookModel = new GuestBookModel();
    }

    public function createEntry()
    {
        // NOTE! We are not doing any input sanitization or validation (we should)!!!
        $this->guestBookModel->create(
            $_POST["email"],
            $_POST["name"],
            $_POST["message"],
            $_SERVER['REMOTE_ADDR']
        );
    }

    public function getAll(): array
    {
        return $this->guestBookModel->getAll();
    }
}
