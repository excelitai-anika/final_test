<?php
include("conn.php");
 session_start();
if(isset($_SESSION['email'])){
    
    if(isset($_POST["changepw"])){
        $old_pass=md5($_POST["old_pass"]);
        $new_pass=md5($_POST["new_pass"]);
    
        $mail=$_SESSION['email'];
        $pass=$_SESSION['password'];
        echo $pass;
        if($old_pass==$pass)
        {
            $sql="UPDATE admin_login set password = '$new_pass' where email = '$mail'";
           
            $result = $conn->query($sql) or die('error');
        
            if($result){
                echo "<script type='text/javascript'>alert('Your password is changed succesfully'); window.location.href='dashboard_master_bug.php'</script>";
            }
        
        }

    }

}
else{
    echo "<script type='text/javascript'>alert('You have to login first'); window.location.href='login_master.php'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change Password</title>

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
    <a><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Change Password </p>

      <form action="login_master.php" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Old password" name="old_pass">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="New Password" name="new_pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Change</button>
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