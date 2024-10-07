
<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/function.php'); ?>
<?php
  $adsid=intval($_GET['adsid']);
  $sql = "Delete from advertisement where AdvId='".$adsid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_ads.php';</script>");
?>
