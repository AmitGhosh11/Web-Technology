<?php
session_start();

// Connect to DB
$conn = new mysqli("localhost", "root", "", "dipa");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Basic SQL query to match user
    $sql = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Set session and cookie
        $_SESSION["username"] = $username;
        setcookie("username", $username, time() + 3600); // 1 hour

        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login Form</h2>
<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
<p style="color:red;"><?php echo $error; ?></p>
</body>
</html>
