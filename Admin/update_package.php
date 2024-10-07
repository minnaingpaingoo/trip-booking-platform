<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/dbconnection.php'); ?>
<?php
$pid=intval($_GET['pid']);  
if(isset($_POST['submit']))
{   $cn=mysqli_connect("localhost","root","","trip");
    $s="update package set SubCatName='" . $_POST["t1"] ."',Detail='" . $_POST["t2"] . "' where SubCatId='" .$scid . "'";
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
  <title>Admin - Update Package</title>
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
<?php
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip");
    $f1=0;
    $f2=0;
    $f3=0;
    
    $target_dir = "packimages/";
    //t4
    $target_file = $target_dir.basename($_FILES["t4"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);    

    //check file size
    if($_FILES["t4"]["size"]>10000000){
        echo "<script>alert('Sorry, your first upload file is too large.');</script>";
        $uploadok=0;
    }
    else{
        if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
            $f1=1;
        } 
    }
        
    //t5
    $target_file = $target_dir.basename($_FILES["t5"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    
    //check file size
    if($_FILES["t5"]["size"]>10000000){
        echo "<script>alert('Sorry, your second upload file is too large.');</script>";
        $uploadok=0;
    }   
    else{
        if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
            $f2=1;
        } 
    }
    

    //t6
    $target_file = $target_dir.basename($_FILES["t6"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
        
    //check file size
    if($_FILES["t6"]["size"]>10000000){
        echo "<script>alert('Sorry, your third upload file is too large.');</script>";
        $uploadok=0;
    }
    
    
    else{
        if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
            $f3=1;
    } 
    }
}
     
?>

<?php
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip");
    $pid=intval($_GET['pid']);
    if (empty($_FILES["t4"]["name"]) && empty($_FILES["t5"]["name"]) && empty($_FILES["t6"]["name"])) {
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";           
    }
    elseif (empty($_FILES['t4']['name']) && empty($_FILES['t5']['name']) && !empty($_FILES['t6']['name'])) {
        $s="update package set PackageName='" . $_POST["t1"] ."',Picture3='" .basename($_FILES["t6"]["name"]) . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";    
    }
    elseif (empty($_FILES['t4']['name']) && !empty($_FILES['t5']['name']) && empty($_FILES['t6']['name'])) {    
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture2='" . basename($_FILES["t5"]["name"]). "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";    
    }
    elseif (empty($_FILES['t4']['name']) && !empty($_FILES['t5']['name']) && !empty($_FILES['t6']['name'])) {    
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture2='" .basename($_FILES["t5"]["name"]). "',Picture3='" .basename($_FILES["t6"]["name"]) . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";
    }
    elseif (!empty($_FILES['t4']['name']) && empty($_FILES['t5']['name']) && empty($_FILES['t6']['name'])) {  
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture1='" . basename($_FILES["t4"]["name"]) . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t8"]."' where PackageId='" . $pid . "'";
    }
    elseif (!empty($_FILES['t4']['name']) && !empty($_FILES['t5']['name']) && empty($_FILES['t6']['name'])) {
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture1='" . basename($_FILES["t4"]["name"]) . "',Picture2='" .basename($_FILES["t5"]["name"]). "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";    
    }
    elseif (!empty($_FILES['t4']['name']) && empty($_FILES['t5']['name']) && !empty($_FILES['t6']['name'])) {    
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture1='" . basename($_FILES["t4"]["name"]) . "',Picture3='" .basename($_FILES["t6"]["name"]) . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid . "'";    
    }
   else{
        $s="update package set PackageName='" . $_POST["t1"] ."',PackagePrice='" . $_POST["t8"] . "',Picture1='" .  basename($_FILES["t4"]["name"]) . "',Picture2='" .  basename($_FILES["t5"]["name"]) . "',Picture3='" .  basename($_FILES["t6"]["name"]) . "',Detail='" . $_POST["t7"] . "',NoOfDay='".$_POST["t9"]."' where PackageId='" . $pid ."'";
   }
    mysqli_query($cn,$s);      
    mysqli_close($cn);
    echo "<script>alert('Record Update');</script>";   
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
            <h1 class="h3 mb-0 text-gray-800">Packages</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Update Trip Package</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Package</h6>
                </div>
                <div class="card-body">

                  <?php 
                  $pid=intval($_GET['pid']);
                  $sql = "SELECT * from package where PackageId='".$pid."'";
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
                            <input type="text" class="form-control" name="t1" id="packagename" placeholder="Enter Package" value="<?php echo $data[1];?>" required pattern="[a-zA-z _-]{3,50}" title"Please Enter Only Characters between 3 to 50 for Package Name">
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Price</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t8" id="txtPrice" placeholder="Enter Price" value="<?php echo $data[4];?>" required minlength="5" maxlength="15" title"Please Enter Only Characters between 3 to 30 for Package Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Old Pic1</label>
                          <div class="col-sm-8">
                            <img src="packimages/<?php echo $data[5]; ?>" width="200px" height="100px" />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Pic1</label>
                          <div class="col-sm-8">
                            <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t4"/>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Old Pic2</label>
                          <div class="col-sm-8">
                            <img src="packimages/<?php echo $data[6]; ?>" width="200px" height="100px" />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Pic2</label>
                          <div class="col-sm-8">
                            <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t5"/>
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Old Pic3</label>
                          <div class="col-sm-8">
                            <img src="packimages/<?php echo $data[7]; ?>" width="200px" height="100px" />
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Pic3</label>
                          <div class="col-sm-8">
                            <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t6"/>
                          </div>
                        </div>
                        
                          <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Details</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" rows="10" cols="100" name="t7" id="packagedetails" placeholder="Enter Package Details" required ><?php echo $data[8];?></textarea> 
                          </div>
                        </div>
                        
                          <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">No Of Days</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="t9" id="packagetype" placeholder=" Enter No Of Days" value="<?php echo $data[9];?>" required>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" name="sbmt" class="btn-primary btn">Update</button>
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