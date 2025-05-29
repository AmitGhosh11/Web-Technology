<?php
session_start();

if (!isset($_SESSION["username"])) {
    echo "You are not logged in!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>

    <?php
    if (isset($_COOKIE["username"])) {
        echo "<p>Cookie: Welcome back, " . $_COOKIE["username"] . "!</p>";
    }
    ?>
    
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
