<?php 


require_once '../bootstrap.php';


if (Input::has('username') && Input::has('password')){
    $username = trim(Input::get('username'));
    $password = trim(Input::get('password'));
        
    if (isset($_POST['username'])){
        Auth::attempt($username, $password);
    }
}
if(Auth::checkUser()){
    header("Location: ads.show.php");
    exit();
}
?>

  <style>

  body {
    background-image: url("/img/login.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;

  }

 #login {
    background-color: #A3DAA3;
  }

.account-wall {
  border-radius: 10%;
}

  .container{
    opacity: .8;
  }

  h1.text-center.login-title {
    color: #0029A3;
    font-weight: bolder;
  }


</style>



<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>

  <body>
    <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">


              <div class="account-wall" id="login">
                <h1 class="text-center login-title"> SIGN IN TO GO TO THE AUCTION </h1>
                  <img class="profile-img" src="/img/code_breaker.jpeg">
                  <form method="POST" class="form-signin">
                  <input type="text" class="form-control" name="username" placeholder="Email" required autofocus>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>
                 </form>
              <a href="/users.create.php" class="text-center new-account">CREATE AN ACCOUNT</a>
              </div>
          </div>
      </div>
  </div>

</body>
</html>