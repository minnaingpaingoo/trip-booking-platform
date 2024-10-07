<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip");
    $sql="update admin set Type='".$_POST["t3"]."' where Id='" . $_POST["t2"] ."'"; 
    $q=mysqli_query($cn,$sql);
    mysqli_close($cn);
    echo "<script>alert('Update is successfully.');</script>";
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
  <title>Admin - Change Type</title>
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
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Change Type</li>
            </ol>
          </div>

           <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Change Type</h6>
                 
                </div>
                <div class="card-body">
                  <form class="form-sample"  method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="col-sm-12 pl-0 pr-0">Select Admin</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <select name="t2" required/>
                                <option value="">Select</option>
                                <?php
                                $cn=mysqli_connect("localhost","root","","trip");
                                $s="select * from admin";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);

                                while($data=mysqli_fetch_array($result))
                                {
                                    if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
                                    {
                                          echo "<option value=$data[0] selected='selected'>$data[4]</option>";
                                    }
                                    else
                                    {
                                       echo "<option value=$data[0]>$data[4]</option>";
                                    }
                                }

                                ?>

                            </select>
                            <input type="submit" value="Show" name="show" formnovalidate/>
                        </div>
                      </div>
                      <div class="form-group col-md-6 pl-md-0">
                        <label class="col-sm-12 pl-0 pr-0">Type</label>
                        <div class="col-sm-12 pl-0 pr-0">
                                <?php
                                    $cn=mysqli_connect("localhost","root","","trip");
                                    $s="select * from admin";
                                    $result=mysqli_query($cn,$s);
                                    $r=mysqli_num_rows($result);

                                    while($data=mysqli_fetch_array($result))
                                    {
                                        if(isset($_POST["show"]))
                                        {
                                            if($data[0]==$_POST["t2"])
                                            {
                                ?>
                                             <input type="text" readonly="true" value="<?php echo $data[3]; ?>">
                                <?php
                                            }
                                        }
                                    }
                                ?>
                            </select>                    
                        </div>
                      </div>
                   
                  <div class="form-group col-md-6">
                    <label class="col-sm-12 pl-0 pr-0">Select Type</label>
                    <div class="col-sm-12 pl-0 pr-0">
                        <select name="t3" required="">
                            <option value="">Select</option>
                            <option value="Admin">Admin</option>
                            <option value="General">General</option>
                        </select>
                    </div>  
                  </div>
                  </div>
                  <button type="submit" name="sbmt" class="btn-primary btn">Change</button>

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