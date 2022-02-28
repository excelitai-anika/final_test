<?php
session_start();
include("../../outline/conn.php");
include("../../outline/header.php");
include("../../outline/sidebar.php");
if($_SESSION['type']=="admin"){
$sql="SELECT * FROM admin_login where type='user' ";
  $result=mysqli_query($conn, $sql); 

}
 ?>   
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>
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
                    <h3 class="card-title">Bordered Table</h3>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">Name</th>
                          <th style="width: 40px">Email</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                      <?php  while($data =mysqli_fetch_assoc($result)) {    
                                    echo "<tr>".
                                            "<td>".$data["name"]."</td>".
                                            "<td>".$data["email"]."</td>". 
                      
                                            "</tr> "; }?>
                    </div>     
                  <!-- /.card-body -->
                 



                </div>
                <!-- /.card -->
                </div>
            </div>
          </div>
    </section>
</div>

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body><?php
;
?>
            