<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:Menu_Utama.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:Menu_Utama.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:Menu_Utama.php');
    }
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<html>
    <head>
        <title>Login</title>
    </head>

    <body>

        <div id="login">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 20px;">
              <img src="Logo Pertamina1.png " alt="logo" width="60px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <ul class="navbar-nav">
                      <li class="nav-item" style="margin-left: 10px;">
                        <a class="navbar-brand" href="#">Login</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Keluar</a>
                    </li>    
                  </ul>
                </div>  
              </nav>
            <h3 class="text-center text-info pt-5">Login form</h3>
            <div class="container">
                <form action="" class="form-signin" method="post">
                  <div class="form-group">
                    <label for="email">Username:</label>
                    <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required autofocus>
                    <div class="valid-feedback">Valid.</div>
                    <!-- <div class="invalid-feedback">Harap di isi dengan benar</div> -->
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    <div class="valid-feedback">Valid.</div>
                    <!-- <div class="invalid-feedback">Password harap di isi</div> -->
                  </div>
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me" name="remember"> Remember me
                    </label>
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="login">Submit</button>
                  <div id="register-link" class="text-right">
                    <a href="register.php" class="text-info">registrasi</a>
                     
                </div>
                </form>
              </div>
              <div class="jumbotron text-center" style="margin-bottom: 0;">
                <div class="col-md-12" >
                    <h7>@Copyright by 18111088_MaulanaYusuf_TIFRP18CNSA_UASWEB1</h7>
                </div>
              </div>
            
        </div>
    </body>
</html>
