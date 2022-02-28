<?php
session_start();
include("../../outline/conn.php");

if(isset($_POST["login"])){
    
    $entr_mail=$_POST["mail"];
    $entr_pass=$_POST["pass"];
    $new_pass=md5($entr_pass);
    $sql="SELECT * FROM admin_login where email='$entr_mail' AND password='$new_pass'";
    $result2=mysqli_query($conn, $sql); 
    $get = mysqli_fetch_assoc($result2);
      $name=$get['name'];
      $_SESSION['name']=$name;
      $mail=$get['email'];
      $_SESSION['email']=$mail;
      $type=$get['type'];
      $_SESSION['type']=$type;
      // $profile_picture =$_get['profile_picture'];
      // $_SESSION['profile_picture']=$profile_picture;
      $sql2="SELECT * FROM admin_login where type='user' ";
      $result4=mysqli_query($conn, $sql2);
    
 if($_SESSION['type']=='admin')
 header("Location:../../admin_login.php");
    
  else
  header("Location:../../dashboard_master_bug.php");
 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../dashboard_master.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in </p>

      <form action="../examples/login_master.php" method="post">
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
