<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
// for cancel booking by admin
if(isset($_REQUEST['bkid']))
{
  $bid=intval($_GET['bkid']);
  $status=2;
  $cancelby='a';
  $cn=mysqli_connect("localhost","root","","trip");
  $sql = "UPDATE booking SET Status='".$status."',CancelBy='".$cancelby."' WHERE  BookingId='".$bid."'";
  $result=mysqli_query($cn,$sql);
  if ($result) {
   echo '<script>alert("Booking Cancelled successfully")</script>';
 }else{
  echo '<script>alert("Something Went Wrong. Please try again")</script>';
}
}

//For Confirm Booking by Admin
if(isset($_REQUEST['bckid']))
{
  $bcid=intval($_GET['bckid']);
  $status=1;
  $cancelby='a';
  $cn=mysqli_connect("localhost","root","","trip");
  $sql = "UPDATE booking SET Status='".$status."', CancelBy='".$cancelby."' WHERE BookingId='".$bcid."'";
  $result=mysqli_query($cn,$sql);
  if ($result) {
    echo '<script>alert("Booking Confirmed successfully")</script>';
  }else{
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
  mysqli_close($cn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Manage Bookings</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

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
            <h1 class="h3 mb-0 text-gray-800">Bookings</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Manage Bookings</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Manage Bookings</h6>
                
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Booking Id</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Depeature Date</th>
                        <th>Return Date</th>
                        <th>Booking Date</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     $sql = "SELECT * from booking";
                     $result=mysqli_query($cn,$sql);
                     $r=mysqli_num_rows($result);
                     $cnt=1;
                     while($data=mysqli_fetch_array($result))
                     {       
                     ?>    
                          <tr>
                            <td><?php echo $cnt; ?> </td>
                            <td>#BK-<?php echo $data[0];?></td>
                            <td><?php echo $data[1];?></td>
                            <td>0<?php echo $data[3];?></td>
                            <td><?php echo $data[2];?></td>
                            <td><?php echo $data[5]; ?></td>
                            <td><?php echo $data[6]; ?></td>
                            <td><?php echo $data[7]; ?></td>
                            <td><?php echo $data[9]; ?></td>
                            <td><?php echo $data[10]; ?></td>
                            <td><?php echo $data[11]; ?></td>
                            <td><?php echo $data[12]; ?></td>
                            <td><?php if($data[13]==0)
                            {
                              echo "Pending";
                            }
                            if($data[13]==1)
                            {
                              echo "Confirmed";
                            }
                            if($data[13]==2 && $data[14]=='a')
                            {
                              echo "Cancelled by you at " .$data[15].".";
                            } 
                            if($data[13]==2 && $data[14]=='u')
                            {
                              echo "Cancelled by User at " .$data[15].".";

                            }
                            ?></td>

                            <?php 
                            if($data[13]==2)
                            {
                            ?>
                            <td>Cancelled</td>
                            <?php 
                            }
                            elseif($data[13]==1)
                            {
                            ?>
                            <td>Confirmed</td>
                            <?php
                            } else{
                            ?>
                            <td>
                                <a href="manage_bookings.php?bkid=<?php echo $data[0];?>" onclick="return confirm('Do you really want to cancel booking')" >Cancel</a>&nbsp;<a href="manage_bookings.php?bckid=<?php echo $data[0];?>" onclick="return confirm('Do you really want to confirm booking')" >Confirm</a>
                            </td>
                            <?php 
                            }?>
                             <td>
                                <a href="delete_bookings.php?bid=<?php echo $data[0];?>" onclick="return confirm('Do you really want to delete booking')" >Delete</a>
                            </td>
                          </tr>
                     <?php 
                        $cnt=$cnt+1; 
                     }
                     ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <?php include('includes/modal.php');?>
        </div>
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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>