<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip");
    $sql="select * from subcategory where SubCatName='" . $_POST["t1"] ."'"; 
    $q=mysqli_query($cn,$sql);
    $r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
    mysqli_close($cn);
    
    if($r>0)
    {
    echo "<script>alert('Subcategory is already exist.');</script>";
    } else{
       
        //Get File Info
        $target_dir = "subcatimages/";
        $target_file = $target_dir.basename($_FILES["t3"]["name"]);
        $tempName=$_FILES["t3"]["tmp_name"];
        //$uploadok = 1;
        $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
        
        //check if image file is a actual image or fake image
      /*  $check=getimagesize($_FILES["t3"]["tmp_name"]);
        if($check!==false) {
            echo "file is an image - ". $check["mime"]. ".";
            $uploadok = 1;
        }else{
            echo "file is not an image.";
            $uploadok=0;
        }      */
        
        //check if file already exists
     /*   if(file_exists($target_file)){
            echo "sorry,file already exists.";
            $uploadok=0;
        }     */
    
        //check file size
        if($_FILES["t3"]["size"]>10000000){
            echo "<script>alert('Sorry, your file is too large.');</script>";
            $uploadok=0;
        }
        
        //aloow certain file formats
        if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefiletype !="gif"){
            echo "<script>alert('Sorry, only jpg, jpeg, Png & gif files are allowed.')'</script>";
            $uploadok=0;
        }else{
            if(move_uploaded_file($tempName, $target_file)){            
            $cn1=mysqli_connect("localhost","root","","trip");
            $s="insert into subcategory(SubCatName,CategoryId,Picture,Detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . basename($_FILES["t3"]["name"]) . "','" . $_POST["t4"] ."')";
            mysqli_query($cn1,$s);    
            echo "<script>alert('Record Save');</script>";    
            } else{
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            } 
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
  <title>Admin - Create SubCategory</title>
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
            <h1 class="h3 mb-0 text-gray-800">Subcategory</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Create Subcategory</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Subategory</h6>
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Subcategory Name</label>
                        <div class="col-sm-12 pl-0 pr-0">
                          <input type="text" class="form-control" name="t1" id="packagename" placeholder="Enter Subcategory Name" required pattern="[a-zA-z _]{2,50}" title"Please Enter Only Characters between 2 to 50 for Subcategory name">
                        </div>
                      </div>
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Select Category</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <select name="t2" required/><option value="">Select</option>
                        <?php
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
    
        echo "<option value=$data[0]>$data[1]</option>";
    
}

?>                      </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Upload Picture</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <input type="file" required="" accept=".jpg,.jpeg,.png,.gif" name="t3" />                       
                        </div>
                     </div>
                     <div class="form-group col-md-6 pl-md-0">
                      <label class="col-sm-12 pl-0 pr-0">Details</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <textarea name="t4" required/></textarea>          
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

</body>

</html>
