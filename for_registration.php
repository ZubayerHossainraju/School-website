<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="header">
		<h1>Sign up page</h1>
	</div>

	<form method="post" action="registration.php">
		<table>
			
			<tr>
				<td>Username:</td>
				<td><input type="text" name="user" class="textInput" required=""></td>
			</tr>

            <tr>
            	<td>Email:</td>
            	<td><input type="email" name="email" class="textInput" required="1"></td>

            </tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" class="textInput" required=""></td>
			</tr>

			

			<tr>
				
				<td><input type="submit" class="btn" name="register_btn" value="Submit"></td>
			</tr>
			
		</table>
	</form>

	<h1><a href="hall.php">Homepage</a></h1>

</body>
</html>