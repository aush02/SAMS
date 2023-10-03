
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  
// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM register WHERE Email='$email'and Password='$password'";
    $result = $conn->query($sql);
$count=mysqli_num_rows($result);
    if ($count >0) {
        // $_SESSION['email']=$email;
        header("location:SAMS.html");
    } else {
        echo "Login unsucessful.";
    }
}

// Close the connection
$conn->close();
?>
