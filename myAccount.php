<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
} else{
  if(isset($_POST['sbmt']))
  {
    $uid=$_SESSION['id'];
    $cn=mysqli_connect("localhost","root","","trip");
    $sql ="Update customer set Name='".$_POST["name"]."', Email='".$_POST["email"]."', Phone='".$_POST["phone"]."' WHERE Id='".$uid."'";
    mysqli_query($cn,$sql);
    echo '<script>alert("Your information is changed successfully.")</script>';
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

    <title>TBP: My Account</title>
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
                        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">User Profile</h3> <br/>
                            <form name="chngpwd" method="post">
                                <?php
                                    if($_SESSION['login'])
                                    {
                                        $cn=mysqli_connect("localhost","root","","trip");
                                        $uid=$_SESSION['id'];
                                        $sql="select * from customer where Id='".$uid."'";
                                        $result=mysqli_query($cn,$sql);
                                        $r=mysqli_num_rows($result);
                                        while($data=mysqli_fetch_array($result))
                                        {
                                        //$id=$data[0];
                                        $uname=$data[1];
                                        $email=$data[2];
                                        $phone=$data[3];
                                        $date=$data[5];
                                        }
                                        mysqli_close($cn);
                                    }
                                ?>
                               
                                <p style="width: 350px;">
                                    <b>Name</b>  
                                    <input type="text" name="name" value="<?php echo $uname;?>" class="form-control" id="name" required="" id="txtname" placeholder="Enter your name"  required pattern="[a-zA-z1 _]{3,50}" title="Please Enter Only Characters and numbers between 3 to 50 for your name." >
                                </p><br/> 
                                
                                <p style="width: 350px;">
                                    <b>Phon Number</b>
                                    <input type="text" class="form-control" id="txtPhone" name="phone" maxlength="11" minlength="8" value="0<?php echo $phone;?>" placeholder="Enter your phone number"  required="">
                                </p><br/>

                                <p style="width: 350px;">
                                    <b>Email</b>
                                    <input type="email" class="form-control" name="email" value="<?php echo $email;?>" id="email" placeholder="Enter your email" >
                                </p> <br/>

                                <p style="width: 350px;"> 
                                    <b>Reg Date:</b>
                                    <input type="text" class="form-control" value="<?php echo $date;?>" readonly="true">
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
<script type="text/javascript">
(function(){
var textbox=document.getElementById("txtPhone");
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
var textbox=document.getElementById("txtname");
EventUtil.addHandler(textbox,"keypress",function(event){
    event=EventUtil.getEvent(event);
    var target=EventUtil.getTarget(event);
    var charCode=EventUtil.getCharCode(event);
    if(/\d/.test(String.fromCharCode(charCode)) && charCode>9 && !event.ctrlKey){
        alert("*Please Enter Only Character.")
    EventUtil.preventDefault(event);
    }
    });
})();
</script>   
</body>
</html>
