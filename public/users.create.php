<?php
// require_once '../utils/Input.php';
// require_once '../utils/Auth.php';
// session_start();

// if((!Input::has('username')) && (!Input::has('password'))) {
// 	echo "Please Enter Name and Password";
// }

// if(Input::has('username') && Input::has('password')){
// 	$username = escape(Input::get('username'));
// 	$password = escape(Input::get('password'));
// 	Auth::attempt($username, $password);
// } 


// if(Auth::check()) {
// 	header('location: /authorized.php'); // always add an exit(); after a header(Location: ....);
// 	exit();
// }

?>
	
<!DOCTYPE html>
<html>
<head>
	<title>User Creation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
	
</head>
<body>
	<h1>User Creation</h1>
	<div class="container">
		
		<p>User Creation (enter user data below):</p>
		<form method="POST" action="" class="form-horizontal">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" placeholder="First Name"><br>
			<label for="last_name">First Name</label>
			<input type="text" name="last_name" placeholder="First Name"><br>
			<label for="gender">Gender</label>
				<select>
					<option name="gender" value="Male">Male</option>
					<option name="gender" value="Female">Female</option>
				</select><br>
			<label for="username">User Name</label>
			<input type="text" name="username" placeholder="username"><br>
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="password"><br>
			
			<label for="address">Street Address</label>
			<input type="text" name="address" placeholder="Street Address"><br>
			<label for="address_line_2">Street Address (Line 2)</label>
			<input type="text" name="address_line_2" placeholder="Unit Number, PO Box, etc."><br>
			<label for="city">City</label>
			<input type="text" name="city" placeholder="City"><br>
			<label for="state">State</label>
			<input type="text" name="state" placeholder="State"><br>
			<label for="zip_code">Zip Code</label>
			<input type="text" name="zip_code" placeholder="State"><br>

			<label for="email">E-Mail</label>
			<input type="text" name="email" placeholder="Email Address"><br>
			<label for="phone">Phone Number</label>
			<input type="text" name="phone" placeholder="Phone"><br>
			
			<input type="submit">
		</form>


	</div>
</body>
</html>
