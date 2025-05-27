<!DOCTYPE html>
<html>
<head>
<title>Smart Shop - Customer Registration</title>
</head>
<body>
 
    <h2>Customer Registration</h2>
 
    <form action="register.php" method="post">
<table border="1">
<tr>
<td><label for="name">Full Name:</label></td>
<td><input type="text" id="name" name="name" required></td>
</tr>
<tr>
<td><label for="email">Email:</label></td>
<td><input type="email" id="email" name="email" required></td>
</tr>
<tr>
<td><label for="phone">Phone Number:</label></td>
<td><input type="tel" id="phone" name="phone" required></td>
</tr>
<tr>
<td><label for="address">Address:</label></td>
<td><textarea id="address" name="address" rows="3" required></textarea></td>
</tr>
<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" id="password" name="password" required></td>
</tr>
<tr>
<td><label for="gender">Gender:</label></td>
<td>
<input type="radio" id="male" name="gender" value="Male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="Female">
<label for="female">Female</label>
</td>
</tr>
<tr>
<td><label for="dob">Date of Birth:</label></td>
<td><input type="date" id="dob" name="dob"></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Register">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
 
</body>
</html>