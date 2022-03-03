<?php
session_start();
include("conn.php");
if(isset($_POST["login"])){
    
    $entr_mail=$_POST["mail"];
    $entr_pass=$_POST["pass"];
    $new_pass=md5($entr_pass);
    $sql="SELECT * FROM admin_login where email='$entr_mail' AND password='$new_pass'";
    $result2=mysqli_query($conn, $sql); 
    $get = mysqli_fetch_assoc($result2);
      $id=$get['id'];
      $_SESSION['id']=$id;
      $name=$get['name'];
      $_SESSION['name']=$name;
      $mail=$get['email'];
      $_SESSION['email']=$mail;
      $type=$get['type'];
      $_SESSION['type']=$type;
      $pass=$get['password'];
      $_SESSION['password']=$pass;
      // $profile_picture =$_get['profile_picture'];
      // $_SESSION['profile_picture']=$profile_picture;
      $sql2="SELECT * FROM admin_login where type='user'";
      $result4=mysqli_query($conn, $sql2);
    if($result2)
    {
      if($_SESSION['type']=='admin'){
        header("Location:admin_login.php");
      }

    else{


      header("Location:dashboard_master_bug.php");
      }
    }
        
  else

  {
    echo"failed";
  }

}







    // session_start();
    // // include("conn.php");

    // if(isset($_POST["login"])){
        
    //   $mail=$_POST["mail"];
    //   $pass=$_POST["pass"];
    //   $new_pass=md5($pass);

    //   $mysqli = new mysqli("localhost","root","","cmsp");

    //   if ($mysqli -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //     exit();
    //   }
 

    //   $sql = "SELECT * FROM admin_login where email='$mail' AND password='$new_pass'";
    //   $result = $mysqli -> query($sql);
      
    //   // Associative array
    //   $row = $result -> fetch_assoc();
      
    //   $name=$row['name'];
    //   $_SESSION['name']=$name;

    //   $pass=$row['password'];
    //   $_SESSION['password']=$pass;

    //   $mail=$row['email'];
    //   $_SESSION['email']=$mail;

    //   $type=$row['type'];
    //   $_SESSION['type']=$type;
      


    // //  if($get['name'])  {
    // //      $name = $get['name'];
    // //      $_SESSION['name']=$name;
    // //     //  echo $name;
    // //  }
    // if($result)

    // header("Location: ./dashboard_master_bug.php");

    // else {
    //     echo "failed";
    //     }

    // // print_n("logged in".$result2);

    // // else {
    // //     echo "failed";
    // //     }

    // }

    ?>





<!-- ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="dashboard_master.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in </p>

      <form action="login_master.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<?php
include("scripts.php");?>
