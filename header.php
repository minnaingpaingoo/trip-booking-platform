<?php
error_reporting(0);
session_start();    
?>
<!-- Sign Up Start  -->
<?php
// Include config file
//require_once "config.php";
 
// Processing form data when form is submitted
if(isset($_POST["signup"])){
    
    if(isset($_POST['agreeCheckbox'])){
    
        if($_POST["password"]==$_POST["confirm_password"]){
            $cn=mysqli_connect("localhost","root","","trip");
            $sql="select * from customer where Email='" . $_POST["email"] ."'"; 
            $q=mysqli_query($cn,$sql);
            $r=mysqli_num_rows($q);
            $data=mysqli_fetch_array($q);
            mysqli_close($cn);
    
            if($r>0)
            {
            echo "<script>alert('Email is already taken.');</script>";
            } else{
              $cn1=mysqli_connect("localhost","root","","trip");
              $s="insert into customer (Name, Email,Phone,Password) values('" . $_POST["username"] ."','" . $_POST["email"] . "','" . $_POST["phone"] . "','".$_POST["password"]."')";
              mysqli_query($cn1,$s);
              mysqli_close($cn1);
              echo "<script>alert('Record Save');</script>";
            }
        }else{
            echo "<script>alert('Password and Confirm Password are not matched!');</script>";   
            }    
    }
    else{
        echo "<script>alert('You must agree our term!');</script>";
    }
}
?>
<!-- /Sign UP End   -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trip Booking Platform</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    
    <!-- for login  -->
    <link href="style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script type="text/javascript" src="js/EventUtil.js"></script>

 <style>
 .button {
  border: 2px solid #000000;
  background: transparent;
  border-radius: 6px;
  cursor: pointer;
  color:#000000;
  font-weight:bold;
  font-size:14px;
}
 </style>
</head>
<body>
 <?php 
    if($_SESSION['login'])
    {
    ?>
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php" onclick="javascript:window.open('index.php#intro','_self')">
            <h1>Trip Booking Platform</h1>                
            </a>
        </div>
    

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php#intro" onclick="javascript:window.open('index.php#intro','_self')">Home</a></li>
                <li><a href="index.php#about" onclick="javascript:window.open('index.php#about','_self')">About</a></li>
                <li><a href="index.php#advertisement" onclick="javascript:window.open('index.php#advertisement','_self')">Ads</a></li>
                <li><a href="index.php#gallery" onclick="javascript:window.open('index.php#gallery','_self')">Gallery</a></li>
                <li><a href="category.php" onclick="javascript:window.open('category.php','_self')">Category</a></li>
                <li><a href="index.php#contact" onclick="javascript:window.open('index.php#contact','_self')">Contact</a></li>
                <li><a href="myAccount.php"  onclick="javascript:window.open('myAccount.php','_self')">My Account</a></li>
                <li><a href="logout.php" onclick="return confirm('Do you really want to logout?')" onclick="javascript:window.open('logout.php','_self')">Log Out</a></li>
            </ul> 
            <?php
                 $cn=mysqli_connect("localhost","root","","trip");
                 $uid=$_SESSION['id'];
                 $sql="select * from customer where Id='".$uid."'";
                 $result=mysqli_query($cn,$sql);
                 $r=mysqli_num_rows($result);
                 while($data=mysqli_fetch_array($result))
                 {
            ?>
            <h5 align="right" style="color:white; font-weight:bold;"><b><?php echo"Welcome: ".$data[1]; ?></b></h5>
            <?php
                 }
            ?>
        </div>
    <?php 
    } else 
    {
    ?> 
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand">
            <a href="index.php" onclick="javascript:window.open('index.php#intro','_self')">
                <b><h1>Trip Booking Platform</h1></b>
            </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php#intro" onclick="javascript:window.open('index.php#intro','_self')">Home</a></li>
                <li><a href="index.php#about" onclick="javascript:window.open('index.php#about','_self')">About</a></li>
                <li><a href="index.php#advertisement" onclick="javascript:window.open('index.php#advertisement','_self')">Advertisement</a></li>
                <li><a href="index.php#gallery" onclick="javascript:window.open('index.php#gallery','_self')">Gallery</a></li>
                <li><a href="category.php" onclick="javascript:window.open('category.php','_self')">Category</a></li>
                <li><a href="index.php#contact" onclick="javascript:window.open('index.php#contact','_self')">Contact</a></li>
                <li><button class="button" id="form-open">LOGIN</button></li>
            </ul>
        </div>
    <?php 
    }
    ?>
  <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login Form -->
        <div class="form login_form">
          <form action="login.php" method="POST">
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" name="email1" maxlength="30" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password1" maxlength="20" placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <a href="forgotPassword.php" class="forgot_pw">Forgot password?</a>
            </div>
            <input type="submit" class="button" name="log" value="Login Now">
            <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="" method="POST">
            <h2>Signup</h2>
            <div class="input_box">
              <i class="uil uil-user user"></i>
              <input type="text" maxlength="20" name="username" id="txtname" placeholder="Enter your name"  required pattern="[a-zA-z _]{3,50}" title="Please Enter Only Characters between 3 to 50 for your name." />
            </div>
            <div class="input_box">
              <i class="uil uil-envelope-alt email"></i>
              <input type="email" placeholder="Enter your email" maxlength="30" name="email" required />
            </div>
            <div class="input_box">
              <i class="uil uil-lock password"></i>
              <input type="password" placeholder="Create password" minlength="8" maxlength="20" name="password" required pattern="[a-zA-z0-9]{8,20}" title="Please Enter Only Characters and numbers between 8 to 20."/>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <i class="uil uil-eye-slash pw_hide"></i>
              <input type="password" placeholder="Confirm password" maxlength="20" name="confirm_password" required pattern="[a-zA-z0-9]{8,20}" title="Please Enter Only Characters and numbers between 8 to 20."/>
              <i class="uil uil-lock password"></i>
            </div>
            <div class="input_box">
              <i class="uil uil-phone phone"></i>
              <input type="text" placeholder="Enter your phone number" minlength="8" maxlength="11" name="phone" value="" id="txtphone" required pattern="[0-9]{8,11}" title="Please enter only digit between 8 to 11." />
            </div>
            <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox"><label for="agreeCheckbox">I agree to the terms and conditions</label>
            <input type="submit" class="button" name="signup" value="Signup Now">

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>

<script src="script.js"></script>

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