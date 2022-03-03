<?php
    session_start();
    include("conn.php");
    include("header.php");
 
    $uid=$_GET['uid'];
    echo "$uid";
    $name=$_GET['nm'];
    echo "$name";
    $mail=$_GET['em'];
    echo "$mail"; 

?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
      <b>Admin</b>LTE</a>
    </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Edit User Info</p>

      <form action="admin_edit_user_list.php" method="GET" enctype="multipart/form-data">
      <!-- <div class="input-group mb-3">
          <label class="fas fa-user">  Choose Profile Picture</label>
          <input type="file" name="profile_picture" alt="User Image" placeholder="Profile Picture">
        </div> -->
          
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo "$name"?> " name="uname" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control"value="<?php echo "$mail"?>" name="email"  placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> -->
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button name="Save" type="submit" class="btn btn-primary btn-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<?php

if(isset($_GET["Save"])){
    $id=$_GET['uid'];
    $mail=$_GET["mail"];
    $name=$_GET["uname"];
    $sql="UPDATE admin_login set name='$name',
    email='$mail' Where id='$id'";

    $sql="UPDATE admin_login set name = '$name' , email ='$email' where id = '$id'";

    $result=mysqli_query($conn, $sql);
        if($result)
            header("Location:userlist.php");
        else "couldn't execute";
    echo "submitted";
}


?>