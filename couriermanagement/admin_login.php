<?php
session_start();
include("conn.php");
include("outline/nav.php");
include("outline/sidebar.php");
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> 
<?php
include("header.php");
?>
  <?php
    if(isset($_SESSION['email'])){
    $entr_mail=$_SESSION['email'];
    $sql1="SELECT profile_picture FROM admin_login where email='$entr_mail'";
    $result3=mysqli_query($conn, $sql1); 
    $data = mysqli_fetch_array($result3);
    $pp="images/".$data['profile_picture'];
      {?>
      <img src="<?php echo $data['profile_picture']; ?>">
      <?php
  }
    $sql2="SELECT * FROM admin_login where type='user' ";
    $result4=mysqli_query($conn, $sql2);
}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            <!-- ignore -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
          <img src="<?php echo($pp); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">         
          <a href="#" class="m-0"><?php echo ucfirst($_SESSION['name'])?></a>         
        </div>
        <a href="userlist.php" class="nav-link active">
              <p class="m-0">
                User List              
              </p>
            </a>
      </div>
            <!-- ignore -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
               <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   <?php
  include("outline/sidebar.php");
  include("scripts.php");
  include("outline/footer.php")
  ?>
 
