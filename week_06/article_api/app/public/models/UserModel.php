<?php

require_once(__DIR__ . "/BaseModel.php");

class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        // demo, this would normally come from the database
        return [
            [
                "id" => 1,
                "email" => "foo@foo.com",
                "username" => "foo_user"
            ],
            [
                "id" => 2,
                "email" => "bar@bar.com",
                "username" => "bar_user"
            ],
        ];
    }

    public function get($id)
    {
        // demo, this would normally come from the database
        return             [
            "id" => 2,
            "email" => "bar@bar.com",
            "username" => "bar_user"
        ];
    }
}
