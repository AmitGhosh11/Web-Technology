<?php
session_start(); 
include '../db_connect.php'; // connects to the database


$nameErr = $emailErr = $phoneErr = $usernameErr = $passwordErr = "";
$name = $email = $phone = $username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,14}$/", $phone)) {
            $phoneErr = "Phone must be 10 to 14 digits";
        }
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $usernameErr = "Only letters, numbers, and underscores allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    // If no errors
    if ($nameErr == "" && $emailErr == "" && $phoneErr == "" && $usernameErr == "" && $passwordErr == "") {

         $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["username"] = $username;
            setcookie("username", $username, time() + (86400 * 30), "/");

            header("Location: welcome.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        echo "<h3>Customer Registration Successful!</h3>";
        echo "<p>Thank you, <strong>" . htmlspecialchars($name) . "</strong>, for registering!</p>";
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Customer Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            <td><span style="color:red;">* <?php echo $nameErr; ?></span></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            <td><span style="color:red;">* <?php echo $emailErr; ?></span></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
            <td><span style="color:red;">* <?php echo $phoneErr; ?></span></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            <td><span style="color:red;">* <?php echo $usernameErr; ?></span></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
            <td><span style="color:red;">* <?php echo $passwordErr; ?></span></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="Register"></td>
        </tr>
    </table>
</form>
