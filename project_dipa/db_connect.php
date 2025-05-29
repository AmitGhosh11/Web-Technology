<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dipa";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Simple SQL INSERT
    $sql = "INSERT INTO customer (name, email, phone, username, password)
            VALUES ('$name', '$email', '$phone', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.html"); // redirect to success page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // close connection
}

?>
