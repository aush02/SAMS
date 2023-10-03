<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sams";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    // You should hash the password before storing it in the database for security reasons.
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO students(`Fname`, `Lname`, `Email`, `Mobile`, `Gender`, `Address`, `Password`) 
            VALUES ('$fname','$lname','$email','$mobile','$gender','$address', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: display.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
