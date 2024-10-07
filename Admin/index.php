
<?php
    include('includes/function.php');
?>
<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <link href="img/logo/logo.png" rel="icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}

?>
<body id="page-top">

  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('includes/sidebar.php');?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('includes/header.php');?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
          <?php
              
          ?>
          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Booking </div>
                      <?php
                      $cn=mysqli_connect("localhost","root","","trip"); 
                      $sql1 = "SELECT BookingId from booking";
                      $q1=mysqli_query($cn,$sql1);
                      $r1=mysqli_num_rows($q1);
                      $data=mysqli_fetch_array($q1);
                      mysqli_close($cn);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo htmlentities($r1);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Category</div>
                      <?php
                      $cn=mysqli_connect("localhost","root","","trip"); 
                      $sql2 = "SELECT CategoryId from category";
                      $q2=mysqli_query($cn,$sql2);
                       $r2=mysqli_num_rows($q2);
                       $data=mysqli_fetch_array($q2);
                       mysqli_close($cn);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlentities($r2);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-file fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Subcategory</div>
                      <?php
                      $cn=mysqli_connect("localhost","root","","trip"); 
                      $sql2 = "SELECT SubCatId from subcategory";
                      $q2=mysqli_query($cn,$sql2);
                       $r2=mysqli_num_rows($q2);
                       $data=mysqli_fetch_array($q2);
                       mysqli_close($cn);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlentities($r2);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-file-alt fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Packages</div>
                      <?php
                      $cn=mysqli_connect("localhost","root","","trip"); 
                      $sql2 = "SELECT PackageId from package";
                      $q2=mysqli_query($cn,$sql2);
                       $r2=mysqli_num_rows($q2);
                       $data=mysqli_fetch_array($q2);
                       mysqli_close($cn);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlentities($r2);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
               <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Advertisements</div>
                      <?php
                      $cn=mysqli_connect("localhost","root","","trip"); 
                      $sql2 = "SELECT AdvId from advertisement";
                      $q2=mysqli_query($cn,$sql2);
                       $r2=mysqli_num_rows($q2);
                       $data=mysqli_fetch_array($q2);
                       mysqli_close($cn);
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlentities($r2);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-ad fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                      <?php 
                      $cn=mysqli_connect("localhost","root","","trip");
                      $sql3 = "SELECT * from customer";
                      $q3=mysqli_query($cn,$sql3);
                       $r3=mysqli_num_rows($q3);
                       $data=mysqli_fetch_array($q3);
                       mysqli_close($cn);
                      ?>    
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo htmlentities($r3);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Admins</div>
                      <?php 
                      $cn=mysqli_connect("localhost","root","","trip");
                      $sql4 = "SELECT * from admin";
                      $q4=mysqli_query($cn,$sql4);
                       $r4=mysqli_num_rows($q4);
                       $data=mysqli_fetch_array($q4);
                       mysqli_close($cn);
                      ?>    
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo htmlentities($r4);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Invoice Example -->
        <?php include('includes/modal.php');?>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php include('includes/footer.php');?>

      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>