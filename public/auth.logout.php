<?php 

require_once '../utils/Input.php';
require_once '../utils/Auth.php';

Auth::logout();

header('location: auth.login.php');
exit();
	
?>

