<?php

require_once(__DIR__ . "/BaseModel.php");
require_once(__DIR__ . "/../dto/GuestBookEntryDTO.php");

class GuestBookModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    function create(?string $email, string $name, string $message, string $ip_address)
    {
        $sql = "INSERT INTO guestbook (email, name, message, ip_address) VALUES (:email, :name, :message, :ip_address);";

        $stmt = self::$pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":message", $message);
        $stmt->bindParam(":ip_address", $ip_address);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function getAll(): array
    {
        $sql = "SELECT id, email, message, name, posted_at FROM guestbook ORDER BY posted_at DESC";
        $stmt = self::$pdo->query($sql);
        $stmt->execute();

        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dtos = [];

        foreach ($items as $item) {
            $dto = new GuestBookEntryDTO(
                $item["id"],
                $item["email"],
                $item["name"],
                $item["message"],
                $item["posted_at"]
            );
            array_push($dtos, $dto);
        }
        return $dtos;
    }
}
