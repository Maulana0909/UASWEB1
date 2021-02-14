<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{   
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($username,$password,$nama,$email))
    {
      header('location:Login.php');
    }
}

?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Register Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

            <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 20px;">
                <img src="Logo Pertamina1.png" alt="logo" width="60px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item" style="margin-left: 10px;">
                      <a class="nav-link">Registrasi</a>
                    </li>    
                  </ul>
                </div>  
              </nav>
    <!-- Begin page content -->
        <main role="main" class="flex-shrink-0">
                <form method="post" action="">
                <div class="text-centerr">
                <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-info">Registrasi</h3>
                        </div>
                            <div class="panel-body">
                                <form method="post" >
                                    <div class="row">
                                        <div for="nama_depan" class="col-xs-6 col-sm-6 col-md-6">
                                             <div class="form-group">
                                                <label for="contoh1">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control input-sm" placeholder="Nama" required>   
                                                </div>
                                            </div>
                                        </div>
            
                                        <div for="email" class="form-group">
                                            <label for="contoh1">Email</label>
                                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
                                        </div>
            
                                        <div class="row">
                                            <div for="username" class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="contoh2">Username</label>
                                                    <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username" >
                                                    
                                                </div>
                                            </div>
                                            <div for="password" class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="contoh2">Password</label>
                                                    <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password" >
                                                    
                                                </div>
                                            </div>
                                        </div>
                                            <div>
                                                <button type="submit" name="register" class="btn btn-info btn-block">submit</button>
                                                <a href="Login.php" class="btn btn-info btn-block">Keluar</a>
                                            </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
    </main>

                <footer class="jumbotron text-center" style="margin-bottom: 0;">
                    <div class="col-md-12" >
                        <h7>@Copyright by 18111088_MaulanaYusuf_TIFRP18CNSA_UASWEB1</h7>
                    </div>
                  </footer>
</body>
</html>



<!-- 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<html>
    <head>
        <title>Registrasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
    
</head>

    <body>
        <div class="container">
            <img src="image/logo.png" class="rounded" width="327" height="80" style="margin-top: 20px;">
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 20px;">
                <img src="image/Logo Pertamina1.png" alt="logo" width="60px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link">Registrasi</a>
                    </li>    
                  </ul>
                </div>  
              </nav>
        <div>
            <form action="login.php" method="POST">
                <div>
        <div class="text-centerr" >
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-info">Registrasi</h3>
                        </div>
                            <div class="panel-body">
                                <form role="form" action= "config/register.php" method="POST">
                                    <div class="row">
                                        <div for="nama_depan" class="col-xs-6 col-sm-6 col-md-6">
                                             <div class="form-group">
                                                <label for="contoh1">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control input-sm" placeholder="Nama" required>   
                                                </div>
                                            </div>
                                        </div>
            
                                        <div for="email" class="form-group">
                                            <label for="contoh1">Email</label>
                                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
                                        </div>
            
                                        <div class="row">
                                            <div for="username" class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="contoh2">Username</label>
                                                    <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username" >
                                                    
                                                </div>
                                            </div>
                                            <div for="password" class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                <label for="contoh2">Password</label>
                                                    <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password" >
                                                    
                                                </div>
                                            </div>
                                        </div>
                                            <div>
                                                <button type="submit"  class="btn btn-info btn-block">submit</button>
                                                <a href="index.html" class="btn btn-info btn-block">Keluar</a>
                                            </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="jumbotron text-center" style="margin-bottom: 0;">
                    <div class="col-md-12" >
                        <h7>@Copyright by 18111088_MaulanaYusuf_TIFRP18CNSA</h7>
                    </div>
                  </div>
          </body>      
</html> -->