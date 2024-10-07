<?php if(!isset($_SESSION)) { session_start(); } ?>
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
}



.cc-selector-2 input{
    position:absolute;
    z-index:999;
}

.car1{background-image:url(Admin/car/probox.png);}
.car2{background-image:url(Admin/car/Toyota_Combi.png);}
.car3{background-image:url(Admin/car/Express.png);}

.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */

p{margin-bottom:.3em;}
* { font-family:monospace; }
.cc-selector-2 input{ margin: 5px 0 0 12px; }
.cc-selector-2 label{ margin-left: 7px; }


</style>
     
</head>
 <?php
if($_SESSION['login']=="")
{
    header("location:index.php");
}

?>
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
<?php

if(isset($_POST["sbmt"]))
{
    $name=$_POST["t3"];
    $email=$_POST["t5"];
    $phone=$_POST["t4"];
    $pid=$_POST["t1"];
    $pname=$_POST["t2"];
    $price=$_POST["t9"];
    $qty=$_POST["t7"];
    
    //TO calculate total price For Family Tour
     $cn=mysqli_connect("localhost","root","","trip");
     $s="SELECT category.CategoryName FROM package,category WHERE package.CategoryId=category.CategoryId and package.PackageId='".$_GET["pid"]."';";
     $result=mysqli_query($cn,$s);
     while($data=mysqli_fetch_array($result))
     {
     $PID=$data[0];
     }
     mysqli_close($cn);
     
     if($PID=="Family Tours")
     {
       $carprice=$_POST["car"];
       $totalqty=$carprice+($price*$qty);  
     }
     else{
    $totalqty=$price*$qty;
     }
    $ddate=$_POST["t6"];
    $message=$_POST["t8"];
    $status=0;
    
    //For Return Date
    $cn=mysqli_connect("localhost","root","","trip");
    $sql="select * from package where PackageId='".$pid."'";
    $result=mysqli_query($cn,$sql);

    while($data=mysqli_fetch_array($result))
    {
        $NoOfDay=$data[9];
        $NoOfDay1=$NoOfDay-1;
        $rdate=date("Y-m-d",strtotime($ddate."+".$NoOfDay1." days"));  
    }
    mysqli_close($cn);
    
    
    $cn1=mysqli_connect("localhost","root","","trip");
    $s="insert into booking(Name,Email,PhoneNo,PackageId,PackageName,Price,Quantity,TotalPrice,DepartureDate,ArrivalDate,Message,Status) values('" . $name ."','" . $email ."','" . $phone ."','" . $pid ."','" . $pname ."','" . $price ."','" . $qty ."','" .$totalqty ."','" . $ddate ."','".$rdate."','".$message."','".$status."')";    
    mysqli_query($cn1,$s);
    mysqli_close($cn1);
    
    $cn2=mysqli_connect("localhost","root","","trip");
    $sql1="select BookingId from booking where Name='".$name."' and PackageId='".$pid."' and DepartureDate='".$ddate."' and ArrivalDate='".$rdate."';";
    $result=mysqli_query($cn2,$sql1);
    while($data=mysqli_fetch_array($result))
    {
       $_SESSION['bid']=$data[0];
       $_SESSION['email']=$email;
       $_SESSION['carprice']=$carprice;
    }
    mysqli_close($cn2);
    
    //echo "<script>alert('Booking Record is Saved');</script>";
    echo("<script>window.location.href='signature.php?';</script>");
    
}  
?>

<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr>
    <td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F; padding-bottom:10px;"><b>Categories</b><br/></td>
</tr><br/><br/>
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
        <td class="headingText" style="float:left; padding-left:150px">Booking</td>
    </tr>
    <tr>
        <td class="paraText" width="900px">
            <table cellpadding="0" cellspacing="0" width="900px" border="0">
                <tr>
                    <td>
                    <?php
                    $cn=mysqli_connect("localhost","root","","trip");
                    $s="select * from package,category,subcategory where package.CategoryId=category.CategoryId and package.SubCatId=subcategory.SubCatId and package.PackageId='" . $_GET["pid"] ."'";

                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);

                    $n=0;
                    $data=mysqli_fetch_array($result);
                    mysqli_close($cn);
                    ?>
                    <?php
                    if($_SESSION['email'])
                    {
                        $packid=$data[0];
                    ?> 
                        <form method="post" enctype="multipart/form-data">
                        <table border="0" width="600px" height="400px" align="center" >
                        <tr>
                            <td>
                                <span class="middletext">Package Id:</span>
                            </td>
                            <td><input type="text" name="t1" readonly="true" value="<?php echo $data[0];?>"/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Package Name:</span>
                            </td>
                            <td><input type="text" name="t2" readonly="true" value="<?php echo $data[1];?>"/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Price Per Tourist:</span>
                            </td>
                            <td><input type="text" name="t9" readonly="true" value="<?php echo $data[4];  ?> MMK"/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Name:</span>
                            </td>
                            <td><input type="text" name="t3" readonly="true" value="<?php echo $_SESSION['name']  ?>"/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Phone No:</span>
                            </td>
                            <td><input type="text" name="t4" readonly="true" value="0<?php echo $_SESSION['phone']?>"/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Email:</span>
                            </td>
                            <td><input type="email" name="t5" readonly="true" value="<?php echo $_SESSION['email'] ?>" /></td>
                        </tr>
                        <tr>
                            <td class="lefttxt">
                                <span class="middletext">Departure Date:</span>
                            </td>
                            <?php
                                $cn=mysqli_connect("localhost","root","","trip");
                                $s="SELECT category.CategoryName FROM package,category WHERE package.CategoryId=category.CategoryId and package.PackageId='".$_GET["pid"]."';";
                                $result=mysqli_query($cn,$s);
                                while($data=mysqli_fetch_array($result))
                                {
                                $PID=$data[0];
                                }
                                mysqli_close($cn);
                            ?>
                            <?php
                                if($PID=="Family Tours")
                                {
                                $minDate=date('Y-m-d', strtotime('+1 day'));
                            ?>
                            <td><input type="date" id="dep_date" name="t6" required="" min="<?php echo $minDate; ?>"></td>
                            <?php    
                                }else{
                            ?>
                            <td>
                                <select name="t6" required="">
                                    <option value="">Select</option>
                                    <?php
                                        $cn=mysqli_connect("localhost","root","","trip");
                                        
                                        $s="SELECT date.Id,package.PackageId,date.Date FROM package,date WHERE date.PackageId=package.PackageId and package.PackageId='".$_GET["pid"]."';";
                                        $result=mysqli_query($cn,$s);
                                        while($data=mysqli_fetch_array($result))
                                        {
                                        echo "<option value=$data[2]>$data[2]</option>";
                                        }
                                        mysqli_close($cn);
                                    ?>
                                </select>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>
                        
                        <?php
                            if($PID=="Family Tours")
                            {
                        ?>
                        <tr>
                            <td>
                                <span class="middletext">Choose Vehicle:</span>
                            </td>
                            <td>
                            <div class="cc-selector-2">
                                <?php
                                $cn=mysqli_connect("localhost","root","","trip");
                                $s="select * from car where PackageId='".$packid."'";
                                $result=mysqli_query($cn,$s);
                                $r=mysqli_num_rows($result);

                                while($data=mysqli_fetch_array($result))
                                {
                                $car1=$data[2];
                                $car2=$data[3];
                                $car3=$data[4];
                                 ?>
                                 <table border="1">
                                 <tr>
                                    <td style="padding:5px">
                                        <p><?php echo $car1; ?> MMK</p>
                                        <input checked="checked"  id="visa2" type="radio" name="car" value="<?php echo $car1; ?>" />
                                        <label class="drinkcard-cc car1" for="visa2"></label>
                                        <p>Max: 4 Tourists</p>
                                    </td>
                                    <td style="padding:5px">
                                        <p><?php echo $car2; ?> MMK</p>
                                        <input  id="mastercard2" type="radio" name="car" value="<?php echo $car2; ?>" />
                                        <label class="drinkcard-cc car2"for="mastercard2"></label>
                                        <p>Max: 8 Tourists</p>
                                    </td>
                                    <td style="padding:5px">
                                        <p><?php echo $car3; ?> MMK</p>
                                        <input   id="mastercard3" type="radio" name="car" value="<?php echo $car3; ?>" />
                                        <label class="drinkcard-cc car3"for="mastercard3"></label>
                                        <p>Max: 25 Tourists</p>
                                    </td>
                                 </tr>
                                 </table>
                                 <?php
                                 }
                                 mysqli_close($cn);
                                 ?>
        
                            </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        <tr>
                            <td>
                               <span class="middletext">No of Tourists:</span>
                            </td>
                            <td><input type="text" name="t7" id="txtPeople" required=""/></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="middletext">Comment:</span>
                            </td>
                            <td><textarea name="t8"/></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" value="Submit" name="sbmt" height="50px" style="font-weight:bold;" onclick="return confirm('Do you really want to book?');" /></td>
                        </tr>
                    </table>    
                    </form>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
            </tr>
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
<script type="text/javascript">
(function(){
var textbox=document.getElementById("txtPeople");
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