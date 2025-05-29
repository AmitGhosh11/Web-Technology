<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validateForm(event) {
            event.preventDefault(); // stop form from submitting

            let isValid = true;

            document.getElementById("nameError").innerHTML = "";
            document.getElementById("emailError").innerHTML = "";
            document.getElementById("phoneError").innerHTML = "";
            document.getElementById("usernameError").innerHTML = "";
            document.getElementById("passwordError").innerHTML = "";

            let name = document.getElementById("fullname").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (name === "") {
                document.getElementById("nameError").innerHTML = "Full Name is required.";
                isValid = false;
            }

            if (email === "" || !email.includes("@") || !email.includes(".")) {
                document.getElementById("emailError").innerHTML = "Enter a valid email.";
                isValid = false;
            }

            if (!/^\d{10,14}$/.test(phone)) {
                document.getElementById("phoneError").innerHTML = "Phone must be 10-14 digits.";
                isValid = false;
            }

            if (username.length < 4) {
                document.getElementById("usernameError").innerHTML = "Username must be at least 4 characters.";
                isValid = false;
            }

            if (password.length < 6) {
                document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters.";
                isValid = false;
            }

            if (isValid) {
                window.location.href = "success.html";
            }
        }
    </script>
</head>
<body>

<h2>Customer Registration Form</h2>

<form onsubmit="validateForm(event)">
    <table>
        <tr>
            <td>Full Name:</td>
            <td>
                <input type="text" id="fullname" name="fullname">
                <br><span id="nameError" style="color:red;"></span>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="text" id="email" name="email">
                <br><span id="emailError" style="color:red;"></span>
            </td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>
                <input type="text" id="phone" name="phone">
                <br><span id="phoneError" style="color:red;"></span>
            </td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" id="username" name="username">
                <br><span id="usernameError" style="color:red;"></span>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" id="password" name="password">
                <br><span id="passwordError" style="color:red;"></span>
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
