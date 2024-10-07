<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
    if(isset($_POST["sbmt"]))
    {
      $cn=mysqli_connect("localhost","root","","trip");
      $email=$_POST["email"];
      $sql = "SELECT * FROM customer WHERE Email='$email'";
      $result =mysqli_query($cn,$sql);
      $row=mysqli_num_rows($result);
      if ($row>0) 
      { 
        $_SESSION['email']=$email;
        echo"<script>alert('Your Email has found.');</script>"; 
        echo "<script type='text/javascript'> document.location = 'resetPassword.php'; </script>"; 
      } else {
        echo"<script>alert('Incorrect Email!!!');</script>";
      }
      mysqli_close($cn);   
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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

input {
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
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
</head>
<body>
    <div class="container">
        <form method="POST">
            <h2>Forgot Password</h2>
            <p>Enter your email address to reset your password.</p>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" name="sbmt">Reset Password</button>
            <div class="option_field">
              <a href="index.php">Back?</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

