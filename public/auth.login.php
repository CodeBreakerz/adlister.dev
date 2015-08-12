<?php
require_once '../utils/Input.php';
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
	<title>POST Example</title>
	
</head>
<body>
	<div class="container">
		
		<p>Login (enter below):</p>
		<form method="POST">
			<label>Name</label>
			<input type="text" name="username" placeholder="username"><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="password"><br>
			<input type="submit">
		</form>


	</div>
</body>
</html>
