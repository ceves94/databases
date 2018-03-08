<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h3>Please enter all required(*) fields before clicking 'Register'.</h3>
<form action="/registering.php" method="POST">
	First Name:<br>
	<input type="text" name="f_name">*<br>
	Last Name:<br>
	<input type="text" name="l_name">*<br>
	Username:<br>
	<input type="text" name="username">*<br>
	Email:<br>
	<input type="email" name="email">*<br>
	Phone Number:<br>
	<input type="tel" name="phone_number"> In 8001112222 format please.<br>
	Address:<br>
	<input type="text" name="address"><br>
	Date of Birth:<br>
	<input type="date" name="d_o_b">*<br>
	Password:<br>
	<input type="password" name="password">*<br>
	Confirm Password:<br>
	<input type="password" name="password">*<br>
	<br>
	<input type="submit" value="Register">
</form>
</body>
</html>
