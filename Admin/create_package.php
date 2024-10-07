<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if(isset($_POST["sbmt"]))
{
    $cn1=mysqli_connect("localhost","root","","trip");
    $sql="select * from package where PackageName='" . $_POST["t1"] ."'"; 
    $q=mysqli_query($cn1,$sql);
    $r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
    mysqli_close($cn1);
    if($r>0)
    {
        echo "<script>alert('Package Name is already exist.');</script>";
    } else{
    $cn=mysqli_connect("localhost","root","","trip");
    $f1=0;
    $f2=0;
    $f3=0;
    
    $target_dir = "packimages/";
    //t4
    $target_file = $target_dir.basename($_FILES["t4"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    //check if image file is a actual image or fake image
    /*
    $check=getimagesize($_FILES["t4"]["tmp_name"]);
    if($check!==false) {
        echo "file is an image - ". $check["mime"]. ".";
        $uploadok = 1;
    }else{
        echo "file is not an image.";
        $uploadok=0;
    }
     */
    
    //check if file already exists
    if(file_exists($target_file)){
        echo "sorry,file already exists.";
        $uploadok=0;
    }
    
    //check file size
    if($_FILES["t4"]["size"]>15000000){
        echo "sorry, your file is too large.";
        $uploadok=0;
    }
    
    
    //aloow certain file formats
    if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefiletype !="gif"){
        echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
        $uploadok=0;
    }else{
        if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
            $f1=1;
    } else{
            echo "sorry there was an error uploading your file.";
        }
    }
    
    
    //t5
    $target_file = $target_dir.basename($_FILES["t5"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    
    //check if image file is a actual image or fake image
    /*
    $check=getimagesize($_FILES["t5"]["tmp_name"]);
    if($check!==false) {
        echo "file is an image - ". $check["mime"]. ".";
        $uploadok = 1;
    }else{
        echo "file is not an image.";
        $uploadok=0;
    }
     */
    
    //check if file already exists
    if(file_exists($target_file)){
        echo "sorry,file already exists.";
        $uploadok=0;
    }
    
    //check file size
    if($_FILES["t5"]["size"]>15000000){
        echo "sorry, your file is too large.";
        $uploadok=0;
    }
    
    
    //aloow certain file formats
    if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefiletype !="gif"){
        echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
        $uploadok=0;
    }else{
        if(move_uploaded_file($_FILES["t5"]["tmp_name"], $target_file)){
            $f2=1;
    } else{
            echo "sorry there was an error uploading your file.";
        }
    }
    //t6
    $target_file = $target_dir.basename($_FILES["t6"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    
    //check if image file is a actual image or fake image
    /*
    $check=getimagesize($_FILES["t6"]["tmp_name"]);
    if($check!==false) {
        echo "file is an image - ". $check["mime"]. ".";
        $uploadok = 1;
    }else{
        echo "file is not an image.";
        $uploadok=0;
    }
    
     */
    //check if file already exists
    if(file_exists($target_file)){
        echo "sorry,file already exists.";
        $uploadok=0;
    }
    
    //check file size
    if($_FILES["t6"]["size"]>15000000){
        echo "sorry, your file is too large.";
        $uploadok=0;
    }
    
    
    //aloow certain file formats
    if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefiletype !="gif"){
        echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
        $uploadok=0;
    }else{
        if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
            $f3=1;
    } else{
            echo "sorry there was an error uploading your file.";
        }
    }
    
        if($f1>0&& $f2>0&&$f3>0)
        {
    
    $s="insert into package(PackageName,CategoryId,SubCatId,PackagePrice,Picture1,Picture2,Picture3,Detail,NoOfDay) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] ."','". $_POST["t8"] . "','" . basename($_FILES["t4"]["name"]) . "','" . basename($_FILES["t5"]["name"]) . "','" . basename($_FILES["t6"]["name"]) . "','" . $_POST["t7"] ."','".$_POST["t9"]."')";
    mysqli_query($cn,$s);
    mysqli_close($cn);
    echo "<script>alert('Record Save');</script>";
        }
    
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
  <title>Admin - Create Package</title>
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
            <h1 class="h3 mb-0 text-gray-800">Package</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Create Package</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Package</h6>
                 
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Select Category</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <select name="t2" required/>
                                <option value="">Select</option>
                                <?php
                                $cn=mysqli_connect("localhost","root","","trip");
                                $s="select * from category";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);

                                while($data=mysqli_fetch_array($result))
                                {
                                    if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
                                    {
                                          echo "<option value=$data[0] selected='selected'>$data[1]</option>";
                                    }
                                    else
                                    {
                                       echo "<option value=$data[0]>$data[1]</option>";
                                    }
                                }

                                ?>

                            </select>
                            <input type="submit" value="Show" name="show" formnovalidate/>
                        </div>
                      </div>
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Select Subcategory</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <select name="t3" required/>
                                <option value="">Select</option>
                                <?php
                                    $cn=mysqli_connect("localhost","root","","trip");
                                    $s="select * from subcategory";
                                    $result=mysqli_query($cn,$s);
                                    $r=mysqli_num_rows($result);

                                    while($data=mysqli_fetch_array($result))
                                    {
                                        if(isset($_POST["show"]))
                                        {
                                            if($data[2]==$_POST["t2"])
                                            {
                                                echo"<option value=$data[0] >$data[1]</option>";
                                            }
                                            else
                                             {
                                               //    echo "<option value=$data[0]>$data[1]</option>";
                                             }
                                        }
                                    }
                                ?>
                            </select>                    
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Package Name</label>
                        <div class="col-sm-12 pl-0 pr-0">
                         <input type="text" class="form-control" name="t1" id="packagelocation" placeholder=" Enter Package Name" required pattern="[a-zA-z _-]{3,50}" title"Please Enter Only Characters between 3 to 50 for Package Name">
                       </div>
                     </div>
                     <div class="form-group col-md-6 pl-md-0">
                      <label class="col-sm-12 pl-0 pr-0">Package Price in MMK</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="text" class="form-control" name="t8" id="txtPrice" placeholder="Enter Price in MMK" required minlength="5" maxlength="15">
                      </div>
                    </div>
                  </div>

                  <div class="row"> 
                     <div class="form-group col-md-6">
                      <label class="col-sm-12 pl-0 pr-0">Attach Picture-1</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t4" required/>         
                      </div>
                    </div> 
                    <div class="form-group col-md-6 ">
                      <label class="col-sm-12 pl-0 pr-0 ">Attach Picture-2</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t5" required/>                      
                      </div>
                    </div>
                  </div>
                  <div class="row"> 
                     <div class="form-group col-md-6 ">
                      <label class="col-sm-12 pl-0 pr-0 ">Attach Picture-3</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="file" accept=".png,.jpg,.jpeg,.gif" name="t6" required/>                      
                      </div>
                    </div>
                    <div class="form-group col-md-6 ">
                      <label class="col-sm-12 pl-0 pr-0 ">No Of Days</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="text" name="t9" id="txtDay" placeholder="Enter Package Details" required/>                      
                      </div>
                    </div> 
                  </div>
                  <div class="row"> 
                    <div class="form-group col-md-6 pl-md-0">
                      <label class="col-sm-12 pl-0 pr-0">Package Details</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <textarea class="form-control" rows="10" cols="100" name="t7" id="packagedetails" placeholder="Enter Package Details" required ></textarea> 
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

(function(){
var textbox=document.getElementById("txtDay");
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