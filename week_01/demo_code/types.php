<?php

declare(strict_types=1); // Enforce strict typing

// Basic Type Declarations
function add(int $a, int $b): int
{
    return $a + $b;
}

echo "Addition: " . add(5, 10) . "<br>";

// Nullable Types
function greet(string $name): string
{
    return $name ? "Hello, $name!" : "Hello, Guest!";
}

// $name;
// // $name = "sue";
// // $name = 22;
// greet($name);

echo greet("Alice") . "<br>";
echo greet(null) . "<br>";

// Union Types (PHP 8+)
function calculateArea(int|float $width, int|float $height): int|float
{
    return $width * $height;
}

echo "Rectangle Area (int): " . calculateArea(5, 10) . "<br>";
echo "Rectangle Area (float): " . calculateArea(5.5, 10.3) . "<br>";

// Class with Typed Properties
class User
{
    public string $name;
    public int $age;
    public ?string $email; // Nullable property

    public function __construct(string $name, int $age, ?string $email = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getUserInfo(): string
    {
        return "Name: $this->name, Age: $this->age, Email: " . ($this->email ?? "Not provided");
    }
}

$user1 = new User("Alice", 25, "alice@example.com");
echo $user1->getUserInfo() . "<br>";

$user2 = new User("Bob", 30);
echo $user2->getUserInfo() . "<br>";

// Mixed Type (PHP 8+)
function printValue(mixed $value): void
{
    echo "Value: " . print_r($value, true) . "<br>";
}

printValue("Hello, World!");
printValue(12345);
printValue([1, 2, 3]);
