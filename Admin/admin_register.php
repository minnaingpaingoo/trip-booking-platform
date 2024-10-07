<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if(isset($_POST["sbmt"]))
{
    if($_POST["password"]==$_POST["confirmpassword"])
    {
    $cn1=mysqli_connect("localhost","root","","trip");
    $sql="select * from admin where UserName='" . $_POST["uname"] ."'"; 
    $q=mysqli_query($cn1,$sql);
    $r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
    mysqli_close($cn1);
    if($r>0)
    {
        echo "<script>alert('User Name is already exist.');</script>";
    } else{
    $cn=mysqli_connect("localhost","root","","trip");
    $s="insert into admin(UserName,Password,Type,AdminName,Email,Phone,Picture) values('" . $_POST["uname"] ."','" . $_POST["password"] . "','" . $_POST["type1"] ."','". $_POST["adminname"] . "','" . $_POST["email"] . "','" . $_POST["phone"] . "','avatar15.jpg')";
    mysqli_query($cn,$s);
    mysqli_close($cn);
    echo "<script>alert('Record Save');</script>";
    }
    }else{
        echo "<script>alert('Password and Confirm Password are not matched!!');</script>";   
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
  <title>Admin - Register Admin</title>
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
              <li class="breadcrumb-item active" aria-current="page">Admin Register</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Register</h6>
                 
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Select Type</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <select class="form-control" name="type1" required>
                                <option value="">Select Type</option>
                                <option value="Admin">Admin</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Admin Name</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <input type="text" class="form-control" name="adminname" id="packagelocation" placeholder=" Enter Admin Name" required pattern="[a-zA-z _]{3,50}" title"Please Enter Only Characters between 3 to 50 for Admin Name">                    
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Email</label>
                        <div class="col-sm-12 pl-0 pr-0">
                         <input type="email" class="form-control" name="email" id="packagelocation" placeholder=" Enter Email" required >
                       </div>
                     </div>
                     <div class="form-group col-md-6 pl-md-0">
                      <label class="col-sm-12 pl-0 pr-0">Phone No</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="text" class="form-control" name="phone" id="txtPrice" placeholder="Enter Phone Number" required minlength="8" maxlength="11">
                      </div>
                    </div>
                  </div>

                  <div class="row"> 
                     <div class="form-group col-md-6">
                      <label class="col-sm-12 pl-0 pr-0">Username</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="text" class="form-control" name="uname" placeholder="Enter Username" required pattern="[a-zA-z0-9_]{4,50}" title"Please Enter between 4 to 50 for User Name"/>
                      </div>
                    </div> 
                    <div class="form-group col-md-6 ">
                      <label class="col-sm-12 pl-0 pr-0">Password</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="password" class="form-control" name="password" minlength="4" maxlength="20" placeholder=" Enter Password" required  title"Please Enter between 4 to 20 for Password."/>                      
                      </div>
                    </div>
                  </div>
                  <div class="row"> 
                     <div class="form-group col-md-6 ">
                      <label class="col-sm-12 pl-0 pr-0 ">Confirm Password</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" minlength="4" maxlength="20" placeholder=" Enter Confirm Password" required title"Please Enter between 4 to 20 for Confirm Password." />                      
                      </div>
                    </div>
                  </div>   

                  <button type="submit" name="sbmt" class="btn-primary btn">Register</button>

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
