<?php
$usernameErr = $emailErr = $passwordErr = "";
$username = $email = $password = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $usernameErr = "Only letters, numbers, and underscores allowed";
        }
    }
 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
 
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }
 
    if ($usernameErr == "" && $emailErr == "" && $passwordErr == "") {
        echo "<h3>Admin Registration Successful!</h3>";
    }
}
 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
 
<h2>Admin Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username" value="<?php echo $username;?>">
<span style="color:red;">* <?php echo $usernameErr;?></span>
<br><br>
 
    Email: <input type="text" name="email" value="<?php echo $email;?>">
<span style="color:red;">* <?php echo $emailErr;?></span>
<br><br>
 
    Password: <input type="password" name="password" value="<?php echo $password;?>">
<span style="color:red;">* <?php echo $passwordErr;?></span>
<br><br>
 
    <input type="submit" name="submit" value="Register">
</form>