<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
$cid=intval($_GET['cid']);  
if(isset($_POST['submit']))
{   $cn=mysqli_connect("localhost","root","","trip");
    $s="update car set Car1Price='" . $_POST["t1"] ."',Car2Price='" . $_POST["t2"] . "',Car3Price='".$_POST["t3"]."' where Id='" .$cid . "'";
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
  <title>Admin - Update Car Price</title>
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
            <h1 class="h3 mb-0 text-gray-800">Car Price</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Update Car Price</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Car Price</h6>
                </div>
                <div class="card-body">

                  <?php 
                  $cid=intval($_GET['cid']);
                  $sql = "select car.Id, package.PackageName, car.Car1Price, car.Car2Price, car.Car3Price from car,package where car.PackageId=package.PackageId and car.Id='".$cid."'";
                  $result=mysqli_query($cn,$sql);
                  $r=mysqli_num_rows($result);
                  $cnt=1;
                  while($data=mysqli_fetch_array($result))
                  { 
                  ?>
                      <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="packagename" readonly="true" value="<?php echo $data[1];?>" required >
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Car 1 Price:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t1" id="txtPrice1" minlength="4" maxlength="8" placeholder=" Enter Car 1 Price" value="<?php echo $data[2];?>" required>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Car 2 Price:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t2" id="txtPrice2" minlength="4" maxlength="8" placeholder=" Enter Car 2 Price" value="<?php echo $data[3];?>" required>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Car 3 Price:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t3" id="txtPrice3" minlength="4" maxlength="8" placeholder=" Enter Car 3 Price" value="<?php echo $data[4];?>" required>
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
var textbox=document.getElementById("txtPrice1");
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

(function(){
var textbox=document.getElementById("txtPrice2");
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

(function(){
var textbox=document.getElementById("txtPrice3");
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