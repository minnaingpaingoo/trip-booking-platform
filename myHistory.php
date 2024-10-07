<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (strlen($_SESSION['login']==0)) 
{
  header('location:index.php');
}else{
    // for cancel booking by user
    if(isset($_REQUEST['bkid']))
    {
        $bid=intval($_GET['bkid']);
        $status=2;
        $cancelby='u';
        $cn=mysqli_connect("localhost","root","","trip");
        $sql = "UPDATE booking SET Status='".$status."',CancelBy='".$cancelby."' WHERE  BookingId='".$bid."'";
        $result=mysqli_query($cn,$sql);
        if ($result) 
        {
            echo '<script>alert("Booking Cancelled successfully")</script>';
        }else{
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
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

    <title>TBP: Trip History</title>
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
 table th{
     font-size:medium;
     font-style:bold;
     text-align:center;
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
            <td style="padding:3px"><b><a href="myAccount.php" style="color:green; font-size:large;">User Profile</a></b></td>
            <td style="padding:3px"><b><a href="changePassword.php" style="color:green; font-size:large;">Change Password</a></b></td>
            <td style="padding:3px"><b><a href="myHistory.php" style="color:green; font-size:large;">Trip History</a></b></td>
        </tr>
    </table>  <br/>

    <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Trip History</h3> <br/>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Booking Id</th>
                <th>Package Name</th> 
                <th>Departure Date</th>
                <th>Arrival Date</th>
                <th>Comment</th>
                <th>Booking Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
                if($_SESSION['name'])
                {
                    $cn=mysqli_connect("localhost","root","","trip");
                    $uemail=$_SESSION['login'];
                    $sql="select * from booking where Email='".$uemail."'";
                    $result=mysqli_query($cn,$sql);
                    $r=mysqli_num_rows($result);
                    $cnt=1;
                    while($data=mysqli_fetch_array($result))
                    {
            ?>
            <tr style="text-align:center">
                <td><?php echo $cnt;?></td>
                <td>#BK<?php echo $data[0];?></td>
                <td><?php echo $data[5]; ?></td>
                <td><?php echo $data[9];?></td>
                <td><?php echo $data[10];?></td>
                <td><?php echo $data[12];?></td>
                <td><?php echo $data[11];?></td>
                <td>
                    <?php 
                    if($data[13]==0)
                    {
                        echo "Pending";
                    }
                    if($data[13]==1)
                    {
                        echo "Confirmed";
                    }
                    if($data[13]==2 and  $data[14]=='u')
                    {
                        echo "Cancelled by you at " .$data[15].".";
                    } 
                    if($data[13]==2 and $data[14]=='a')
                    {
                        echo "Cancelled by agency team at " .$data[15].".";
                    }
                    ?>
                </td>
                <?php 
                if($data[13]==2)
                {
                ?>
                <td>Cancelled</td>
                <?php 
                }elseif($data[13]==1)
                {
                ?>
                <td>Confirmed</td>
                <?php
                }else{
                ?>
                <td><a href="myHistory.php?bkid=<?php echo $data[0];?>" onclick="return confirm('Do you really want to cancel booking')" >Cancel</a></td>
                <?php 
                }
                ?>
            </tr>
                <?php 
                    $cnt=$cnt+1; 
                }
                    mysqli_close($cn);
            }
                ?>
        </table>
    </form>                 
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


