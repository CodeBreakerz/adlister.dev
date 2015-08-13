<?php

// 	public static function attempt($username, $password)
// 	{
// 		$log = new Logger ();
// 		if(escape(strtolower(Input::get('username'))) == "guest" && (password_verify($password, static::$password))) {
// 			$_SESSION['LOGGED_IN_USER'] = true;	
// 			$_SESSION['username'] = $username;
// 			$log->info("User {$username} logged in.");
// 		} else {
// 			$log->error("User {$username} failed to log in!");	
// 		}
// 	}
	
// 	public static function check ()
// 	{
// 		if(isset($_SESSION['LOGGED_IN_USER'])) {
// 			return true; 
// 		} else {
// 			return false;
// 		}
// 	}
	
// 	public static function user ()
// 	{
// 		if(isset($_SESSION['LOGGED_IN_USER'])) {
// 			return $username;
// 		} else {
// 			header('location: login.php');
// 			exit();
// 		}


// 	}

// 	public static function logout ()
// 	{
// 		session_start();
// 		$_SESSION = [];

// 		if (ini_get("session.use_cookies")) {
// 	        $params = session_get_cookie_params();
// 	        setcookie(session_name(), '', time() - 42000,
// 	            $params["path"], $params["domain"],
// 	            $params["secure"], $params["httponly"]
// 	        );
// 	    }

// 		session_destroy();
// 	}
		
// }



?>


<html>
<body>
  <form action="login.php" method="POST">
  Username: <input type="text" name="username" />
  Password: <input type="password" name="password" />
  <input type="submit" />
  </form>
</body>
</html>

