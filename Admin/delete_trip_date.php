<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/function.php'); ?>
<?php
  $tdid=intval($_GET['tdid']);
  $sql = "Delete from date where Id='".$tdid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_trip_date.php';</script>");
?>
