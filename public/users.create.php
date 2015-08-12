<?php


?>
	
<!DOCTYPE html>
<html>
<head>
	<title>User Creation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
	
</head>
<body>
	<? require_once '../views/partials/navbar.php'; ?>
	<div class="container" id="user_creation">
		<h2>User Creation</h2>
			<p>User Creation (enter user data below):</p>

		<div class="row">
			<div>
				<input id="submit_button" type="submit">
			</div>
		</div>

		<form method="POST" action="" class="form-horizontal">
			<div class="row">
				<div class="form-group-inline">
					<label for="username" class="control-label col-sm-2">User Name:</label>
					<div class="col-sm-8">
						<input type="text" name="username" placeholder="Username" class="form-control"><br>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group-inline">
					<label for="first_name" class="control-label col-sm-2">Name:</label>
					<div class="col-sm-4">
						<input type="text" name="first_name" placeholder="First Name" class="form-control"><br>
					</div>
						<div class="col-sm-4">
						<input type="text" name="last_name" placeholder="Last Name" class="form-control"><br>
					</div>
				</div>
			</div>

			<!-- <div class="form-group">
				<label for="gender" class="control-label col-sm-3">Gender</label>
					<div class="col-sm-7">
					<select class="form-control">
						<option name="gender" value="Male" class="form-control">Male</option>
						<option name="gender" value="Female" class="form-control">Female</option>
					</select><br>
				</div>	
			</div>
 -->

			<div class="row">
				<div class="form-group-inline">
					<label for="email" class="control-label col-sm-2">E-Mail:</label>
					<div class="col-sm-4">
						<input type="email" name="email" placeholder="Email Address" class="form-control"><br>
					</div>

					<div class="col-sm-4">
						<input type="email" name="email_confirm" placeholder="Re-Enter Email Address" class="form-control"><br>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group-inline">
					<label for="password" class="control-label col-sm-2">Password:</label>
					<div class="col-sm-4">
						<input type="password" name="password" placeholder="Password" class="form-control"><br>
					</div>

					<div class="col-sm-4">
						<input type="password" name="password_confirm" placeholder="Re-Enter Password" class="form-control"><br>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group-inline">
					<label for="address" class="control-label col-sm-2">Street Address:</label>
					<div class="col-sm-8">
						<input type="text" name="address" placeholder="Street Address" class="form-control"><br>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group-inline">
					<label for="address_line_2" class="control-label col-sm-2">Street Address (Line 2):</label>
					<div class="col-sm-8">
						<input type="text" name="address_line_2" placeholder="Unit Number, Suite, PO Box, etc." class="form-control"><br>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="form-group-inline">
					<label for="city" class="control-label col-sm-2">City</label>
					<div class="col-sm-4">
						<input type="text" name="city" placeholder="City" class="form-control"><br>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group-inline">

					<label for="state" class="col-sm-2 control-label">State</label>
					<div class="col-sm-2">
						<select class="form-control" id="state" name="state">
							<option value="">N/A</option>
							<option value="AK">Alaska</option>
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="AZ">Arizona</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DC">District of Columbia</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="IA">Iowa</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MA">Massachusetts</option>
							<option value="MD">Maryland</option>
							<option value="ME">Maine</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MO">Missouri</option>
							<option value="MS">Mississippi</option>
							<option value="MT">Montana</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="NE">Nebraska</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NV">Nevada</option>
							<option value="NY">New York</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="PR">Puerto Rico</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VA">Virginia</option>
							<option value="VT">Vermont</option>
							<option value="WA">Washington</option>
							<option value="WI">Wisconsin</option>
							<option value="WV">West Virginia</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>

					<label for="zip_code" class="control-label col-sm-2">Zip Code</label>
					<div class="col-sm-2">
						<input type="text" name="zip_code" placeholder="Zip Code" class="form-control"><br>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group-inline">
					<label for="phone" class="control-label col-sm-2">Phone Number</label>
					<div class="col-sm-4">
						<input type="text" name="phone" placeholder="Phone" class="form-control"><br>
					</div>
				</div>	
			</div>
			
		</form>


	</div>
</body>
</html>
