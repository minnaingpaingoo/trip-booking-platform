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
<style type="text/css">
    td{
        color:blue;
        padding:5px;
    }
</style>
     
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php 
session_start();
error_reporting(0);
include('function.php'); 
?>
 <?php
   if(isset($_POST["sbmt"]))
   {
        if($_SESSION['login']==""){
         echo"<script>alert('You must login first!!!');</script>";
       }
       else{
           if($_SESSION['login']){
            $cn=makeconnection();
            $name=$_SESSION['name'];
            $sql="select * from customer where Name='".$name."'";
            $result=mysqli_query($cn,$sql);
            $r=mysqli_num_rows($result);
            while($data=mysqli_fetch_array($result))
            {
            $_SESSION['name']=$data[1];
            $_SESSION['email']=$data[2];
            $_SESSION['phone']=$data[3]; 
            }
            mysqli_close($cn);  
                   
           $Pid=$_POST["id"]; 
           echo("<script>window.location.href='booking.php?pid=$Pid';</script>");
           }
       } 
   }  
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
    <td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F; padding-bottom:10px;"><b>Categories</b><br/></td>
</tr><br/><br/><br/>
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


<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px" >
    <tr>
        <td class="headingText" style="float:left; padding-left:220px;">View Packages</td>
    </tr>
    <tr>
        <td class="paraText" width="900px">
            <table cellpadding="0" cellspacing="0" width="900px" border="0">
                <tr>
                    <td>
                        <form method="post">
                        <table border="1" width="600px" height="400px" align="center" >
                            <?php
                            $s="select * from package,category,subcategory where package.CategoryId=category.CategoryId and package.SubCatId=subcategory.SubCatId and package.PackageId='" . $_GET["pid"] ."'";
                            $result=mysqli_query($cn,$s);
                            $r=mysqli_num_rows($result);
                            $n=0;
                            $data=mysqli_fetch_array($result);
                            mysqli_close($cn);
                            $id=$data[0];
                            ?>
                            <tr>
                                <td colspan="3">
                                    <span class="middletext">Pack Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1];?>
                                </td>
                            </tr>
                            <tr>
                                <td class="middletext"><img src="Admin/packimages/<?php echo $data[5];?>" width="200px" height="200px"  /></td>
                                <td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[6];?>" width="200px" height="200px"  /></td>
                                <td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[7];?>" width="200px" height="200px"  /></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="middletext">Category:</span>
                                </td>
                                <td colspan="2">
                                    <?php echo $data[11];?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="middletext">Subcategory:</span>
                                </td>
                                <td colspan="2">
                                    <?php echo $data[13];?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="middletext">Price Per Tourist:</span>
                                </td>
                                <td colspan="2">
                                    <?php echo $data[4];?> MMK
                                </td>
                            </tr>
                            <input type="hidden" value="<?php echo $data[0]; ?>" name="id">
                            <tr>
                                <td>
                                    <span class="middletext">Details:</span>
                                </td>
                                <td colspan="2">
                                    <textarea style="resize:vertical; width:427px; height:200px" readonly="true"><?php echo $data[8];?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="3" height="50px" style="font-weight:bold;"><input type="submit" value="Booking" name="sbmt" /></td>
                            </tr>                        
                        </table>
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</div>

</div>

<div style="clear:both"></div>

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