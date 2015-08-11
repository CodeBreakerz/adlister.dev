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
	<div class="container">
		<h2>User Creation</h2>
			<p>User Creation (enter user data below):</p>

		<form method="POST" action="" class="form-horizontal">
			<div class="form-group">
				<label for="first_name" class="control-label col-sm-2">First Name:</label>
				<div class="col-sm-10">
					<input type="text" name="first_name" placeholder="First Name" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">
				<label for="last_name" class="control-label col-sm-2">Last Name</label>
				<div class="col-sm-10">
					<input type="text" name="last_name" placeholder="Last Name" class="form-control"><br>
				</div>
			</div>

			<div class="form-group">
				<label for="gender" class="control-label col-sm-2">Gender</label>
					<div class="col-sm-10">
					<select class="form-control">
						<option name="gender" value="Male" class="form-control">Male</option>
						<option name="gender" value="Female" class="form-control">Female</option>
					</select><br>
				</div>	
			</div>

			<div class="form-group">
				<label for="username" class="control-label col-sm-2">User Name</label>
				<div class="col-sm-10">
					<input type="text" name="username" placeholder="username" class="form-control"><br>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="control-label col-sm-2">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" placeholder="Password" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">
				<label for="address" class="control-label col-sm-2">Street Address</label>
				<div class="col-sm-10">
					<input type="text" name="address" placeholder="Street Address" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">
				<label for="address_line_2" class="control-label col-sm-2">Street Address (Line 2)</label>
				<div class="col-sm-10">
					<input type="text" name="address_line_2" placeholder="Unit Number, PO Box, etc." class="form-control"><br>
				</div>
			</div>
				
			<div class="form-group">
				<label for="city" class="control-label col-sm-2">City</label>
				<div class="col-sm-10">
					<input type="text" name="city" placeholder="City" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">	
				<label for="state" class="control-label col-sm-2">State</label>
				<div class="col-sm-10">
					<input type="text" name="state" placeholder="State" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">	
				<label for="zip_code" class="control-label col-sm-2">Zip Code</label>
				<div class="col-sm-10">
					<input type="text" name="zip_code" placeholder="State" class="form-control"><br>
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="ontrol-label col-sm-2">E-Mail</label>
				<div class="col-sm-10">
					<input type="text" name="email" placeholder="Email Address" class="form-control"><br>
				</div>
			</div>
			
			<div class="form-group">
				<label for="phone" class="ontrol-label col-sm-2">Phone Number</label>
				<div class="col-sm-10">
					<input type="text" name="phone" placeholder="Phone" class="form-control"><br>
				</div>
			</div>	
			
			<input type="submit">
		</form>


	</div>
</body>
</html>
