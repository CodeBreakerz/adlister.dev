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
	<html>
  <head>
<style>

.loggerin {
  padding
}

</style>
  </head>


<form class="form-inline">
  <div class="form-group loggerin">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
