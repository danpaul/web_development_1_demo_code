<?php

class GuestBookEntryDTO
{
    public readonly int $id;
    public readonly ?string $email;
    public readonly string $name;
    public readonly string $message;
    public readonly string $createdAt;

    public function __construct(int $id, ?string $email, string $name, string $message, string $createdAt)
    {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
        $this->createdAt = $createdAt;
    }
}
