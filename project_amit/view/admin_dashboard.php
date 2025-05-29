<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    header("Location: admin_validation.php");
    exit();
}
?>

<h2>Welcome, <?php echo $username; ?>!</h2>
<p>This is the admin dashboard.</p>
<a href="logout.php">Logout</a>
