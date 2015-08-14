<?php 

require_once '../bootstrap.php'



$LOGGED_IN_USER = false;
if (Input::has('username') && Input::has('password')){
    $username = escape(trim(Input::get('username')));
    $password = trim(Input::get('password'));
        
    if (isset($_POST['username'])){
        Auth::attempt($username, $password);
    }
}
if(Auth::checkUser()){
    header("Location: index.php");
    exit();
}
?>



<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>

  <body>
<!--   <? require_once '../views/partials/navbar.php'; ?>
 -->
    <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">

              <h1 class="text-center login-title">Sign in to continue to the Auction </h1>

              <div class="account-wall">
                  <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                      alt="">
                  <form class="form-signin">
                  <input type="text" class="form-control" placeholder="Username" required autofocus>
                  <input type="password" class="form-control" placeholder="Password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">
                      Sign in</button>
                 <!--  <label class="checkbox pull-left">
                      <input type="checkbox" value="remember-me">
                      Remember me
                  </label>
                  <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                  </form>
              </div>
              <a href="/users.create.php" class="text-center new-account">Create an account </a>
          </div>
      </div>
  </div>

</body>
</html>