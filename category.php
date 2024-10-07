<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trip Booking Platform Category</title>
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

<div id="intro" ></div>
<?php include('slider.php'); ?>

<div style="height:50px"></div>
<div style="width:1200px; margin:auto" >

<div style="width:200px; float:left; ">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr>
    <td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F; padding-bottom:10px;"><b>Categories<br/></b></td>
</tr>
<?php

$cn=mysqli_connect("localhost","root","","trip");
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr><tr></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:1000px; float:left; padding-bottom:20px">
<table cellpadding="0px" cellspacing="0" width="1200px">
<tr><td class="headingText">Welcome to My Tour</td></tr>
<tr><td class="paraText" width="900px">Plan and Book Your Perfect Trip. Create your dream holiday.
Do what you like and what you love.
What's New Explore new experiences, attractions, food and wine trends.
What will you find during you visit to My Tour? Bagan is commonly termed as a sea of temples by people across the world. 
It has the largetst and densest concentration of Buddhist temples, pagodas, stupas and ruins in the world. 
The best time to visit Bagan is from November to May when there is little rainfall in the area. 
Bagan cuisine is considered to be the true taste of Asia. It combines the best of Indian, Chinese and Thai cuisine. 
Located in Central Myanmar, only 4 hours away from Mandalay, Bagan is one of the world's greatest archaeological sites. 
Visit this amazing historical town hosting more than 2,200 temples big and small.  
The temples rise above the canopy of trees, presenting a picture-perfect scenery to visitors. The temples are a part of Bagan Archaeological Zone. 
They contain carvings, frescos and statues of Buddha, which are certainly mesmerising and fun to explore. Out of the 2,200 sites, only a few are regularly visited. 
Being the country's foremost tourist destination, Bagan has innumerable licensed tourist transport services to help tourists enjoy this beautiful site. 
Apart from the temples, visitors can also enjoy a leisure trip on the Ayeyarwady River, Myanmar's lifeline. 
A charming downtown full of great shops, restaurants, art galleries and so much more. This is My Tour, where you can experience
beautiful tourist places.</td><td style="background-image:url(img/Bagan4.avif); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="700px" height="500px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME <br> without spending a dime</div></td></tr></table>

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