<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip"); 
    $sql="select * from car where PackageId='" . $_POST["t4"] ."'"; 
    $q=mysqli_query($cn,$sql);
    $r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
    mysqli_close($cn);
    if($r>0)
    {
        echo "<script>alert('This trip is already created car price.');</script>";
    } else{
    $cn=mysqli_connect("localhost","root","","trip"); 
    $s="insert into car(PackageId,Car1Price,Car2Price,Car3Price) values('" . $_POST["t4"] ."','".$_POST["t1"]."','".$_POST["t2"]."','".$_POST["t3"]."')";
    mysqli_query($cn,$s);
    mysqli_close($cn);
    echo "<script>alert('Record Save');</script>";
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
  <title>Admin - Create Car Price</title>
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
            <h1 class="h3 mb-0 text-gray-800">Car Price</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Create Car Price</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Car Price</h6>
                  
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Select Family Tour Package:</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <select name="t4" required/>
                            <option value="">Select</option>
                                <?php
                                $cn=mysqli_connect("localhost","root","","trip");
                                $s="select package.PackageId,package.PackageName,category.CategoryId from package,category where package.CategoryId=category.CategoryId and category.CategoryName='Family Tours';";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);

                                while($data=mysqli_fetch_array($result))
                                {
                                    echo"<option value=$data[0]>$data[1]</option>";
                                }
                                ?>
                            </select> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Car 1 Price:</label>
                        <div class="col-sm-12 pl-0 pr-0">
                          <input type="text" class="form-control" id="txtPrice1" name="t1" minlength="5" maxlength="8" placeholder="Enter Car 1 Price" required>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Car 2 Price:</label>
                        <div class="col-sm-12 pl-0 pr-0">
                          <input type="text" class="form-control" id="txtPrice2" name="t2" minlength="5" maxlength="8" placeholder="Enter Car 1 Price" required >
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Car 3 Price:</label>
                        <div class="col-sm-12 pl-0 pr-0">
                          <input type="text" class="form-control" id="txtPrice3" name="t3" minlength="5" maxlength="8" placeholder="Enter Car 1 Price" required>
                        </div>
                      </div>
                    </div>  
                  <button type="submit" name="sbmt" class="btn-primary btn">Create</button>

                  <button type="reset" class="btn-inverse btn">Reset</button>
                </form>
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