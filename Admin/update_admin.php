<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
 
if(isset($_POST['submit']))
{   
    $aid=intval($_GET['aid']); 
    $cn1=mysqli_connect("localhost","root","","trip");
    $s="update admin set UserName='".$_POST["uname"]."' , AdminName='".$_POST["aname"]."' , Email='".$_POST["email"]."' , Phone='".$_POST["phone"]."' where Id='".$aid."'";
    mysqli_query($cn1,$s);
    mysqli_close($cn1);
    echo '<script>alert("Information is updated successful.")</script>';
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
  <title>Admin - Update Admin</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/EventUtil.js"></script>
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
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Update Admin</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Admin</h6>
                </div>
                <div class="card-body">

                  <?php 
                  $aid=intval($_GET['aid']);
                  $sql = "SELECT * from admin where Id='".$aid."'";
                  $result=mysqli_query($cn,$sql);
                  $r=mysqli_num_rows($result);
                  $cnt=1;
                  while($data=mysqli_fetch_array($result))
                  { 
                  ?>
                      <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Admin Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="aname" id="packagename" placeholder="Enter Admin Name" value="<?php echo $data[4];?>" required pattern="[a-zA-z _]{3,30}" title"Please Enter Only Characters between 3 to 30 for Subcategory Name">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="packagename" placeholder="Enter Email" value="<?php echo $data[5];?>" required >
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Phone No</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtphone" name="phone" placeholder=" Enter Phone No." value="0<?php echo $data[6];?>" required minlength="8" maxlength="11">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Username</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="uname" placeholder=" Enter Username." value="<?php echo $data[1];?>" required pattern="[a-zA-z0-9_]{3,30}" title"Please Enter between 3 to 30 for Username">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Type</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" readonly="true" name="type" value="<?php echo $data[3];?>" required>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Reg Date</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" readonly="true" name="regdate" value="<?php echo $data[8];?>" required>
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
<script type="text/javascript">
(function(){
var textbox=document.getElementById("txtPrice");
EventUtil.addHandler(textbox,"keypress",function(event){
    event=EventUtil.getEvent(event);
    var target=EventUtil.getTarget(event);
    var charCode=EventUtil.getCharCode(event);
    if(!/\d/.test(String.fromCharCode(charCode)) && charCode>9 && !event.ctrlKey){
        alert("*Please Enter Number.")
    EventUtil.preventDefault(event);
    }
    });
})();
</script>
</body>

</html>