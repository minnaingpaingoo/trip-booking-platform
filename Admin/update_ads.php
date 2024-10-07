<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
$adsid=intval($_GET['adsid']);  
if(isset($_POST['submit']))
{   
    $cn=mysqli_connect("localhost","root","","trip"); 
    $target_dir = "addverimages/";
    $target_file = $target_dir.basename($_FILES["t3"]["name"]);
    
    if($_FILES["t3"]["size"]>10000000){
        echo "<script>alert('Sorry, your upload file is too large.');</script>";
        $uploadok=0;
    }
    else{
        move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file);
    }
    
    $cn=mysqli_connect("localhost","root","","trip");
    $adsid=intval($_GET['adsid']);
    
    if (empty($_FILES["t3"]["name"])){  
        $s="update advertisement set Title='" . $_POST["t1"] ."',CompanyName='".$_POST["t2"]."',Details='" . $_POST["t4"] . "' where AdvId='" .$adsid . "'";    
    }
    else
    {
        $s="update advertisement set Title='" . $_POST["t1"] ."',CompanyName='".$_POST["t2"]."',Picture='".basename($_FILES["t3"]["name"])."',Details='" . $_POST["t4"] . "' where AdvId='" .$adsid . "'";
    }
    mysqli_query($cn,$s);
    mysqli_close($cn);
    echo "<script>alert('Record Update');</script>";
    
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
  <title>Admin - Update Advertisement</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #dd3d36;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #5cb85c;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
  </style>
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
            <h1 class="h3 mb-0 text-gray-800">Advertisement</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Update Advertisement</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Advertisement</h6>
                </div>
                <div class="card-body">

                  <?php 
                  $adsid=intval($_GET['adsid']);
                  $sql = "SELECT * from advertisement where AdvId='".$adsid."'";
                  $result=mysqli_query($cn,$sql);
                  $r=mysqli_num_rows($result);
                  $cnt=1;
                  while($data=mysqli_fetch_array($result))
                  { 
                  ?>
                      <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Title</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t1" id="packagename" placeholder="Enter Title" value="<?php echo $data[1];?>" required minlength="4">
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Company Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t2" id="packagename" placeholder="Enter Company Name" value="<?php echo $data[2];?>" required pattern="{3,30}" title"Please Enter between 3 to 30 for Company Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Old Image</label>
                          <div class="col-sm-8">
                            <img src="addverimages/<?php echo $data[3];?>" width="200">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                          <div class="col-sm-8">
                            <input type="file" accept=".jpg,.jpeg,.png,.gif" name="t3">
                          </div>
                        </div>
                          <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Details</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t4" id="packagetype" placeholder=" Enter Advertisement Detail" value="<?php echo $data[4];?>" required>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" name="submit" class="btn-primary btn">Update</button>
                          </div>
                        </div>
                      </form>
                      <?php 
                    
                  } 
                  mysqli_close($cn);
                  ?>
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

</body>

</html>