<?php
session_start();
include("conn.php");
include("header.php");
include("outline/sidebar.php");
if($_SESSION['type']=="admin"){
$sql="SELECT * FROM admin_login where type='user' ";
  $result=mysqli_query($conn, $sql); 

}
 ?>   

<body class="hold-transition sidebar-mini layout-fixed">
<div >

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
      <section class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">User Table</h3>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">Name</th>
                          <th style="width: 40px">Email</th>
                          <th style="width: 40px">Edit</th>
                          <th style="width: 40px">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                      <?php  while($data =mysqli_fetch_assoc($result)) {    
                                    echo "<tr>
                                            <td>".$data["name"]."</td>
                                            <td>".$data["email"]."</td> 
                                            <td><a href = 'admin_edit_user_list.php?uid=$data[id] &nm=$data[name] &em=$data[email] &pw=$data[password]'>Edit</td>
                                            <td><a href = 'admin_delete_user_list.php?xid=$data[id]'>Delete</td>
                                            </tr>
                                             "; }?>
                    </div>     
                </div>
                <!-- /.card -->
                </div>
            </div>
          </div>
    </section>
</div>
<?php
  include("scripts.php");
  ?>

            