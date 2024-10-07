<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php include('includes/function.php'); ?>
<?php
  $scid=intval($_GET['scid']);
  $sql = "Delete from subcategory where SubCatId='".$scid."'";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
  echo "<script>alert('Record Delete');</script>";
  echo("<script>window.location.href='manage_subcategory.php';</script>");
?>
