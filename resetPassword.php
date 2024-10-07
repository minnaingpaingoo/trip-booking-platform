<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
    if(isset($_POST["sbmt"]))
    {
        if($_POST["new-password"]==$_POST["con-password"])
        {   
            $email=$_SESSION['email'];
            //echo $email;
            $cn=mysqli_connect("localhost","root","","trip");
            $password=$_POST["new-password"];
            $sql = "Update customer set Password='".$password."' WHERE Email='$email'";
            mysqli_query($cn,$sql);
            mysqli_close($cn);
            echo"<script>alert('Your Password has been changed!!!');</script>";
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";     
        
          
        }else
        {
              echo"<script>alert('New Password and Confirm Password are not matched!!!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Password</title>
<style>
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.input_box {
  position: relative;
  margin-top: 30px;
  width: 80%;
  height: 40px;
}
.input_box input {
  height: 80%;
  width: 100%;
  border: none;
  outline: none;
  padding: 0 30px;
  color: #333;
  transition: all 0.2s ease;
  border-bottom: 1.5px solid #aaaaaa;
}
.input_box input:focus {
  border-color: #7d2ae8;
}
.input_box i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
  color: #707070;
}
.input_box i.email,
.input_box i.password {
  left: 0;
}
.input_box input:focus ~ i.email,
.input_box input:focus ~ i.password {
  color: #7d2ae8;
}
.input_box i.pw_hide {
  right: 0;
  font-size: 18px;
  cursor: pointer;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.option_field {
  margin-top: 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
</style>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <div class="container">
        <form method="post">
            <h2>Update Password</h2>
            <p>Enter your new password.</p>
            <div class="input_box">
                <input type="password" name="new-password" minlength="8" maxlength="20" placeholder="New Password" required>
                <i class="uil uil-lock password"></i>
            </div>
            <p>Enter your confirm password.</p>
            <div class="input_box">
                <input type="password" name="con-password" minlength="8" maxlength="20" placeholder="Confirm Password" required>
                <i class="uil uil-lock password"></i>
            </div>
            <button type="submit" name="sbmt">Update Password</button>
            <div class="option_field">
              <a href="index.php">Go Home?</a>
            </div>
        </form>
    </div>
    <script src="update-script.js"></script>
</body>
</html>
