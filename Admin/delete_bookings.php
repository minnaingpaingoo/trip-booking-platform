
<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/function.php'); ?>
<?php
  $bid=intval($_GET['bid']);
  $sql = "Delete from booking where BookingId='".$bid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_bookings.php';</script>");
?>
