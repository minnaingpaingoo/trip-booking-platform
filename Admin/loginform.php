<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login Form</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->

<style>
.tableshadow{ 
    box-shadow:10px 10px 5px #999; 
    padding-top:40px; 
    border:solid 1px #60b2e7;
}
.lefttxt{ 
    padding-left:20px;  
    font-size:16px; 
    color:#60b2e7;
}
.toptd{ 
    color:white; 
    font-size:24px; 
    text-align:center; 
    height:40px; background-color:#60b2e7;
}
</style>
</head>
<body>
<!--header-->
<!--sticky-->

<?php include('includes/function.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
    $cn=mysqli_connect("localhost","root","","trip");
	$s="select * from admin where UserName='" . $_POST["uname"] . "' and Password='" . $_POST["pass"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION['username']= $_POST["uname"];
        $_SESSION['aid']=$data[0];
		$_SESSION["usertype"]=$data[3];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
        echo "<script type='text/javascript'>alert('Login Successfully.'); </script>";              
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";              

	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>



<?php include('topforlogin.php'); ?>
<!--/sticky-->
<div style="padding-top:150px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style=" min-height:450px;">

</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="500px" height="400px" align="left" class="tableshadow">
<tr>
    <td colspan="2" class="toptd">
        <img src="adminpics/lo.jpg" width="550px" height="100px" />
    </td>
</tr>
<tr>
    <td><img src="adminpics/gggh.jpg" width="200px" height="200px" /></td>
    <td class="lefttxt">
        <table border="0" width="120px" height="200px">
        <tr>
            <td class="lefttxt">User Name</td>
            <td><input type="text" name="uname" required pattern="[a-zA-z0-9 _]{4,50}" title"Please Enter between 4 to 50 for User Name" /></td>
        </tr>
        <tr>
            <td class="lefttxt">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="password" minlength="4" maxlength="20" name="pass" required  title"Please enter between 4 to 20 for Password" /></td>
        </tr>
        </table>
    </td>   
<tr>
    <td></td>
    <td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td>
</tr>
</table>
</form>



</div>


</div>

</body>
</html>