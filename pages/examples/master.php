
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>
<body class="hold-transition register-page">
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="cmsp";
$conn = new mysqli($servername, $username, $password,$dbname);
if(!$conn){
    die("error");
}
  if(isset($_POST["register"])){
// //upload image
//       $file=$_FILES['fileToUpload'];
//       $fileName = $_FILES['name'];
//       $fileTmp =$_FILES['tmp_name'];
//       $fileSize=$_FILES['size'];
//       $fileError=$_FILES['error'];
//       $fileType=$_FILES['type'];
//       $fileExt =explode('.',$fileName);
//       $fileActutalExt = strtolower(end($fileExt));
//       $allowed = array('jpg','jpeg','png');
//       if(in_array($fileActutalExt, $allowed)){
//           $fileDestination='uploads/'.$fileName;
//           move_uploaded_file($fileTmp,$fileDestination);
//         } 
//       else{
//         "You can not upload this file";
//       }
//         $profile_picture=$_POST["file"];
      $mail=$_POST["mail"];
      $name=$_POST["name"];
      $pass=$_POST["pass"];
      // $type=$_POST["type"];
      $con_pass=$_POST["con_pass"];
      $filename = $_FILES['profile_picture']['name'];
      $tempname = $_FILES["profile_picture"]["tmp_name"];    
          $folder = "images/".$filename;

          if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }      
           
    if($pass==$con_pass){
        $pass=md5($pass);

            $sql= "INSERT INTO admin_login (profile_picture,email,name,password,type) 
                    VALUES('$filename','$mail','$name','$pass','user')";
            $result1=mysqli_query($conn, $sql); 
            echo "<script type='text/javascript'>alert('User is added'); window.location.href='login_master.php'</script>";
        }
    }

  ?>
<div class="register-box">
  <div class="register-logo">
      <b>Admin</b>LTE</a>
  </div>


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registration Form </p>

      <form action="master.php" method="post" enctype="multipart/form-data">
      <div class="input-group mb-3">
          <label class="fas fa-user">  Choose Profile Picture</label>
          <input type="file" name="profile_picture" alt="User Image" placeholder="Profile Picture">
        </div>
          
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="mail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="con_pass" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      <!-- <div class="input-group mb-3">
        <label for="">User Type :</label>
        <br>
        <select name="type" id="type">
          <option value="1">Admin</option>
          <option value="2">User</option>     
        </select>
          </div>  -->
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login_master.php" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
