<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trip Booking Platform Package</title>
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
   
     
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php 
session_start();
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

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr>
    <td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F; padding-bottom:10px;"><b>Categories<br/></b></td>
</tr><br/><br/><br/><br/><br/>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr><tr></tr>";

}

?>

</table>

</div>

<div style="width:800px; float:left; padding-bottom:20px">
        <table cellpadding="0px" cellspacing="0" width="1000px">
            <tr>
                <td class="headingText">Packages</td>
            </tr>
            <tr>
                <td class="paraText" width="900px">
                    <table cellpadding="0" cellspacing="0" width="900px">




<table cellpadding="0" cellspacing="0" width="900px">


<?php
$s="select * from package where package.SubCatId='" . $_GET["subcatid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
		


<tr>
<?php

	}?>
                        <td>
                            <table border="0" width="100px" bordercolor="#FF6666">
                                <tr>
                                    <td align="center" style="background-color:#60B0E6; font-family:Lucida Calligraphy; color:#FFF"><?php echo $data[1];?> </td>
                                </tr>
                                <tr>
                                    <td class="image"><img src="Admin/packimages/<?php echo $data[5];?>" width="250px" height="200px" /></td>
                                </tr><br/><br/>
                                <tr>
                                    <td align="center" style="background-color:#60B0E6; font-family:Lucida Calligraphy"><a href="detail.php?pid=<?php echo $data[0]; ?>"><font color="#FFFFFF">View Detail</font></a></td>
                                </tr>
                            </table>
                        </td>
<?php

if($n%3==2)
{
?>
                    </tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

                </table>
              </td>
          </tr>
     </table>

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