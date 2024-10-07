<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if(isset($_POST["sbmt"]))
{
    $cn1=mysqli_connect("localhost","root","","trip");
    $s="insert into date(SubCatId,PackageId,Date) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "')";
    mysqli_query($cn1,$s);    
    echo "<script>alert('Record Save');</script>";    
           
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
  <title>Admin - Create Trip Date</title>
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
            <h1 class="h3 mb-0 text-gray-800">Trip Date</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Create Trip Date</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Trip Date</h6>
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Select Subcategory</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <select name="t1" required>
                            <option value="">Select</option>
                            <?php
                            $cn1=mysqli_connect("localhost","root","","trip");
                            $msg="Family Tours";
                            $s="SELECT * FROM category,subcategory where category.CategoryId=subcategory.CategoryId and category.CategoryName NOT LIKE '%".$msg."';";
                            $result=mysqli_query($cn1,$s);
                            $r=mysqli_num_rows($result);

                            while($data=mysqli_fetch_array($result))
                                {
                                    if(isset($_POST["show"])&& $data[2]==$_POST["t1"])
                                    {
                                          echo "<option value=$data[2] selected='selected'>$data[3]</option>";
                                    }
                                    else
                                    {
                                       echo "<option value=$data[2]>$data[3]</option>";
                                    }  
                                }
                                mysqli_close($cn);
                            ?>                     
                        </select>
                        <input type="submit" value="Show" name="show" formnovalidate/>
                        </div>
                      </div>
                      
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Select Package</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <select name="t2" required/>
                                <option value="">Select</option>
                                <?php
                                    $cn=mysqli_connect("localhost","root","","trip");
                                    $s="select * from package";
                                    $result=mysqli_query($cn,$s);
                                    $r=mysqli_num_rows($result);

                                    while($data=mysqli_fetch_array($result))
                                    {
                                        if(isset($_POST["show"]))
                                        {
                                            if($data[3]==$_POST["t1"])
                                            {
                                                echo"<option value=$data[0]>$data[1]</option>";
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
                        <label class="col-sm-12 pl-0 pr-0">Select Date</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <?php
                        $minDate=date('Y-m-d', strtotime('+1 day'));
                        ?>
                        <input type="date" required="" name="t3" min="<?php echo $minDate; ?>" />                       
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
