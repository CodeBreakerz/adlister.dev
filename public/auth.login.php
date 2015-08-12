<?php
require_once '../utils/Input.php';
require_once '../views/partials/navbar.php';
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
<html >
  <head>
    <title>Sign Up/Login Box</title>
    
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<div id="logmsk" style="display: block;">
    <div id='close'>X</div>
    <div id="userbox">
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Sign up</h1>
        <div id="sumsk" style="display: none;">Sending</div>
        <input id="name" placeholder="ID" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <input id="pass" type="password" placeholder="Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
        <p id="logint" style="opacity: 1;">Login as an existing user</p>
        <p id="nameal" style="display: none; opacity: 1;">ID:</p>
        <p id="passal" style="display: none; opacity: 1;">Password:</p>
        <button id="signupb" style="opacity: 0.2; cursor: default;">Sign up</button>
    </div>
</div>
        <script src="js/index.js"></script>
  </body>
</html>
    
    
    
    
    
    

    
    
    
    