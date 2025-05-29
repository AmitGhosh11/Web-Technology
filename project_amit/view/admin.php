<!DOCTYPE html>
<html>
<head>
<title>Admin Registration - Online Ticket Management System</title>
</head>
<body>
 
    <h2>Admin Registration</h2>
 
    <form action="admin_register.php" method="post">
<table border="1">
<tr>
<td><label for="name">Full Name:</label></td>
<td><input type="text" name="name" ></td>
</tr>
<tr>
<td><label for="email">Email:</label></td>
<td><input type="email" id="email" name="email" ></td>
</tr>
<tr>
<td><label for="phone">Phone Number:</label></td>
<td><input type="tel" id="phone" name="phone" ></td>
</tr>
<tr>
<td><label for="nid">National ID (NID):</label></td>
<td><input type="text" id="nid" name="nid"  placeholder=" "></td>
</tr>
<tr>
<td><label for="employee_id">Employee ID:</label></td>
<td><input type="text" id="employee_id" name="employee_id" ></td>
</tr>
<tr>
<td><label for="role">Role:</label></td>
<td>
<select id="role" name="role" >
<option value="Manager">Manager</option>
<option value="Supervisor">Supervisor</option>
<option value="Support Staff">Support Staff</option>
</select>
</td>
</tr>
<tr>
<td><label for="department">Department:</label></td>
<td><input type="text" id="department" name="department" ></td>
</tr>
<tr>
<td><label for="office_location">Office Location:</label></td>
<td><input type="text" id="office_location" name="office_location" ></td>
</tr>
<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" id="password" name="password" ></td>
</tr>
<tr>
<td><label for="confirm_password">Confirm Password:</label></td>
<td><input type="password" id="confirm_password" name="confirm_password" ></td>
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