<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
} else{
  if(isset($_POST['sbmt']))
  {
      if($_POST["newPassword"]==$_POST["confirmPassword"])
      {
        $cn=mysqli_connect("localhost","root","","trip");
        $email=$_SESSION['login'];
        $cpassword=$_POST['currentPassword'];
        $newpassword=$_POST['newPassword'];
        $sql ="SELECT * FROM customer WHERE Email='".$email."' and Password='".$cpassword."'";
        $result=mysqli_query($cn,$sql);
        $r=mysqli_num_rows($result);
    
        if($r > 0)
        {
            $cn1=mysqli_connect("localhost","root","","trip");
            $con="update customer set Password='".$newpassword."' where Email='".$email."'";
            mysqli_query($cn1,$con);
            mysqli_close($cn1);

            echo '<script>alert("Your password successully changed")</script>';
        } else {
            echo '<script>alert("Your current password is wrong")</script>';
        }
        mysqli_close($cn);    
      }else{
        echo '<script>alert("New Password and Confirm Password are not match!!")</script>';
      }
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TBP: Change Password</title>
 <!--Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">     

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="css/animate.css" rel="stylesheet" />  
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    
    <script type="text/javascript" src="js/EventUtil.js"></script>
 <style>
 table td{
     font-size:large;
     font-style:bold;
 }
 </style>  
     
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php 
error_reporting(0);
include('function.php'); 
?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
    <?php 
        include('header.php');
    ?>
    <!-- /.navbar-collapse -->
    </div>
<!-- /.container -->
</nav>
<!--/sticky-->
<div id="intro" ></div>
<?php include('slider.php'); ?>

<div style="height:50px"></div>  

<div style="width:1000px; margin:auto" >
    
    <table style="cellpadding:0; cellspacing:0; width:500px;">
        <tr>
            <td style="padding:3px"><b><a href="myAccount.php" style="color:green;">User Profile</a></b></td>
            <td style="padding:3px"><b><a href="changePassword.php" style="color:green;">Change Password</a></b></td>
            <td style="padding:3px"><b><a href="myHistory.php" style="color:green;">Trip History</a></b></td>
        </tr>
    </table>  <br/>

    <div style="width:800px; float:left; padding-bottom:20px">
        <section id="packages" class="secPad">
            <div class="container">
                <div class="privacy">
                    <div class="container">
                        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3> <br/>
                            <form name="chngpwd" method="post">
                                <p style="width: 350px;">
                                    <b>Current Password</b>  
                                    <input type="password" name="currentPassword" class="form-control" required="Please Enter Only Characters and numbers between 8 to 20 for your current password." placeholder="Enter current password" maxlength="20" minlength="8"  required  title="Please Enter Only Characters and numbers between 8 to 20 for your current password." >
                                </p><br/> 
                                
                                <p style="width: 350px;">
                                    <b>New Password</b>
                                    <input type="password" name="newPassword" class="form-control" required="" placeholder="Enter new password" maxlength="20"  required="Please Enter Only Characters and numbers between 8 to 20 for your new password." minlength="8"  title="Please Enter Only Characters and numbers between 8 to 20 for your new password." >
                                </p><br/>

                                <p style="width: 350px;">
                                    <b>Confirm Password</b>
                                    <input type="password" name="confirmPassword" class="form-control" required="" placeholder="Enter confirm password" maxlength="20"  required="Please Enter Only Characters and numbers between 8 to 20 for your confirm password." minlength="8"  title="Please Enter Only Characters and numbers between 8 to 20 for your confirm password." >
                                </p> <br/>

                                <p style="width: 350px;">
                                    <button type="submit" name="sbmt" class="btn-primary btn">Update</button>
                                </p>
                            </form>
                    </div>
                </div>
            </div>
        </section>
    </div>                                     
</div>

<div style="clear:both"></div>
     
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                    </div>
                    <p>&copy;Copyright 2023 - Trip Booking Platform. All rights reserved.</p>
                </div>
            </div>    
        </div>
</footer>  
</body>
</html>

