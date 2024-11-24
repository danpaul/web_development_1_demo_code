<?php

require_once(__DIR__ . "/BaseModel.php");
require_once(__DIR__ . "/../dto/UserDTO.php");

class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    // Example using PDO initialized in base class (some methods not implemented)
    // function create($email, $username, $password)
    // {
    //     $sql = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password); SELECT LAST_INSERT_ID();";

    //     $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    //     $stmt = self::$pdo->prepare($sql);
    //     $stmt->bindParam(":email", $email);
    //     $stmt->bindParam(":username", $username);
    //     $stmt->bindParam(":password", $hashed_password);

    //     $stmt->execute();

    //     $user_id = self::$pdo->lastInsertId();
    //     $stmt->closeCursor();

    //     $user = $this->getUser($user_id, null);
    //     return $this->mapDbUserToAuthUserDTO($user);
    // }

    public function getAll(): array
    {
        return [
            new UserDTO(1, "foo@foo.com", "foo_user"),
            new UserDTO(2, "bar@bar.com", "bar_user"),
            new UserDTO(3, "baz@baz.com", "baz_user")
        ];
    }

    public function get(int $id): UserDTO
    {
        return new UserDTO(1, "foo@foo.com", "foo_user");
    }
}
