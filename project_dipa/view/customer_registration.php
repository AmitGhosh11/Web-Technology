<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
</head>
<body>

<h2>Customer Registration</h2>

<form action="registration.php" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>
