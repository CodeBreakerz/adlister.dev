<?php
require_once '../bootstrap.php';
require_once '../views/partials/navbar.php';

if ($_SESSION['Logged_In']) {
    header('Location: http://adlister.dev');
    exit();
}

$sessionId = session_id();
$_SESSION['Logged_In'] = false;

 

 if (!empty($_POST)) {
    $username = trim(Input::get('username'));
    $password = Input::get('password');

    if (strtolower($username) == 'guest' && $password == 'password') {
        $_SESSION['Logged_In'] = true;
        $_SESSION['Username'] = $_POST['username'];
        header('Location: http://adlister.dev');
        exit();
    } else {
        echo '<script language="javascript">';
        echo 'alert("Incorrect Username or Password")';
        echo '</script>';
        $_SESSION['Logged_In']=false;
    }
}

?>


<html>
<body>
  <form action="auth.login.php" method="POST">
  Username: <input type="text" name="username" />
  Password: <input type="password" name="password" />
  <input type="submit" />
  </form>
</body>
</html>