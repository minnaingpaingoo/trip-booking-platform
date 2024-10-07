<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php

if(isset($_POST['submit']))
{
  $aid=$_SESSION['aid'];
  $username=$_POST['username'];
  $adminName=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
 
    $cn1=mysqli_connect("localhost","root","","trip");
    $s="update admin set UserName='".$username."' , AdminName='".$adminName."' , Email='".$email."' , Phone='".$phone."' where Id='".$aid."'";
    mysqli_query($cn1,$s);
    mysqli_close($cn1);
    echo '<script>alert("Profile is updated successful.")</script>';

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
  <title>Admin - Update Admin Profile</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <script type="text/javascript" src="js/EventUtil.js"></script>
  </head>

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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Admin Profile</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Admin Profile</h6>
                </div>
                <div class="card-body">
                  <form method="post">
                    <?php
                    $aid=$_SESSION['aid'];
                    $s="select * from admin where Id='".$aid."'";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                     while($data=mysqli_fetch_array($result))
                     { 
                        ?>
                        <div class="container rounded bg-white mt-5">
                          <div class="row">
                            <div class="col-md-4 border-right">
                              <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                               <?php 
                               if($data[7]=="avatar15.jpg"){ ?>
                                <img class="rounded-circle mt-5" src="img/avatar15.jpg"  width="90">
                                <?php 
                              } else { ?>
                                <img class="rounded-circle mt-5"  src="profileimages/<?php  echo $data[7];?>" width="90">
                                <?php 
                              } ?><span class="font-weight-bold"><?php  echo $data[5];?></span>
                                    <span>+95&nbsp;<?php  echo $data[6];?></span>
                              <div class="mt-3">
                                <a href="update_adminimage.php?id=<?php echo $aid;?>">Edit Image</a>
                              </div>
                              </div>
                            </div>
                            <div class="col-md-8">
                            <div class="p-3 py-5">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                </div>
                                <h6 class="text-right">Edit Profile</h6>
                              </div>
                              <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-group">Admin Naime</label>
                                    <input type="text" class="form-control" name="name" value="<?php  echo $data[4];?>" required='true'>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-group">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php  echo $data[5];?>" required>
                                </div>
                              </div>
                              <div class="row mt-3">
                                  <div class="col-md-6">
                                  <label class="form-group">Phone No</label>
                                  <input type="text" class="form-control" id="txtphone" name="phone" value="0<?php  echo $data[6];?>" required minlength="8" maxlength="11">
                                </div>
                                <div class="col-md-6">
                                  <label class="form-group">Username</label>
                                  <input type="text" class="form-control" name="username" value="<?php  echo $data[1];?>" required>
                                </div>
                              </div>
                              <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-group">Type</label>
                                    <input type="text" class="form-control"name="type" value="<?php  echo $data[3];?>" readonly="true">
                                </div>
                                <div class="col-md-6">
                                     <label class="form-group">Reg Date</label>
                                     <input type="text" class="form-control"  value="<?php  echo $data[8];?>" readonly="true">
                                </div>
                              </div>
                              <div class="mt-5 text-right">
                                <button class="btn btn-primary profile-button" type="submit" name="submit">Update Profile</button>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                         <?php 
                       }
                      ?>
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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

  <script type="text/javascript">
(function(){
var textbox=document.getElementById("txtphone");
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