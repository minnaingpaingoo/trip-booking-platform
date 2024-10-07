
<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/function.php'); ?>
<?php
  $cid=intval($_GET['cid']);
  $sql = "Delete from contact where Id='".$cid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_users_contact.php';</script>");
?>
