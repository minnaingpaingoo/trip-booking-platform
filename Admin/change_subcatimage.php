<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php 
$imgid=intval($_GET['imgid']);
if(isset($_POST['submit']))
{
  $cn=mysqli_connect("localhost","root","","trip");
  $pimage=$_FILES["t1"]["name"];
  
  $target_dir = "subcatimages/";
  $target_file =$target_dir.basename($pimage);
  $imagefiletype = pathinfo($pimage, PATHINFO_EXTENSION);
  
  if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefiletype !="gif"){
    echo "<script>alert('Sorry, only jpg, jpeg, Png & gif files are allowed.');</script>";        
  }else{
        move_uploaded_file($_FILES["t1"]["tmp_name"],"subcatimages/".$_FILES["t1"]["name"]);
        $sql="update subcategory set Picture='".basename($pimage) ."' where SubCatId='".$imgid."'";
        mysqli_query($cn,$sql);
        mysqli_close($cn);
        echo "<script>alert('Record Update');</script>";
        echo("<script>window.location.href='manage_subcategory.php';</script>");
  }
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
  <title>Admin - Change Subcategory Image</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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
            <h1 class="h3 mb-0 text-gray-800">Subcategory Image</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Change Image</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Subcategory Image</h6>
                 
                </div>
                <div class="card-body">
                  <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                    <?php 
                    $cn=mysqli_connect("localhost","root","","trip");
                    $imgid=intval($_GET['imgid']);
                    $sql = "SELECT * from subcategory where SubCatId='".$imgid."'";
                    $result=mysqli_query($cn,$sql);
                    $r=mysqli_num_rows($result);
                    $cnt=1;
                    while($data=mysqli_fetch_array($result))
                    { 
                        ?>  
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Old Image </label>
                          <div class="col-sm-8">
                            <img src="subcatimages/<?php echo $data[3];?>" width="200">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                          <div class="col-sm-8">
                            <input type="file" name="t1" accept=".png,.jpg,.jpeg,.gif" id="packageimage" required>
                          </div>
                        </div>  
                        <?php 
                      }
                      mysqli_close($cn);
                     ?>

                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" name="submit" class="btn-primary btn">Update</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="login.html" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>

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

</body>

</html>