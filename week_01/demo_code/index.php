<?php

// run using PHP built in web server: https://www.php.net/manual/en/features.commandline.webserver.php
// php -S localhost:8000

// Start session for session handling
session_start();

// Basic Output
echo "<h1>PHP Basics Demo</h1>";

// Variables and Data Types
$name = "Alice";        // String
$age = 25;              // Integer
$height = 5.9;          // Float
$is_student = true;     // Boolean

echo "<p>Name: $name, Age: $age, Height: $height, Student: " . ($is_student ? "Yes" : "No") . "</p>";

// Control Structures
if ($age >= 18) {
    echo "<p>Adult</p>";
} else {
    echo "<p>Minor</p>";
}

echo "<p>Counting with a loop:</p>";
for ($i = 1; $i <= 3; $i++) {
    echo "$i ";
}

// Indexed arrays
$fruits = ["Apple", "Banana", "Cherry"];
array_push($fruits, "watermelon");
$fruits[0];

// Associative array
$person = [
    "name" => "Alice",
    "age" => 25,
    "city" => "New York"
];

echo "<p>First Fruit: " . $fruits[0] . "</p>";
echo "<p>Person's Name: " . $person["name"] . "</p>";

// Functions
function greet($name)
{
    return "Hello, $name!";
}

echo "<p>" . greet("Alice") . "</p>";

// Form Handling (HTML form and PHP processing together)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formName = htmlspecialchars($_POST['name']); // Sanitize user input
    echo "<p>Form submitted! Hello, $formName!</p>";

    $_SESSION["username"] = $formName;
} else if (empty($_SESSION["username"])) {
    $_SESSION["username"] = "anon";
}
?>

<!-- Simple HTML Form -->
<form method="POST">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Submit</button>
</form>

<?php
// Database Connection (commented out for safety)
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["id"] . " - Name: " . $row["name"] . "</p>";
    }
} else {
    echo "<p>No results found.</p>";
}

$conn->close();
*/

// Object-Oriented Programming (OOP)
class Car
{
    public $make;
    public $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function getCarInfo()
    {
        return $this->make . " " . $this->model;
    }
}

$car = new Car("Toyota", "Camry");
echo "<p>Car Info: " . $car->getCarInfo() . "</p>";

// Session Handling
$_SESSION["username"] = "Alice";
echo "<p>Session Username: " . $_SESSION["username"] . "</p>";
?>