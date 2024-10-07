
<?php  if(!isset($_SESSION)) { session_start(); } ?>
<?php
if($_SESSION['loginstatus']=="")
{
    header("location:loginform.php");
}

?>
 <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <ul class="navbar-nav ml-auto">
 
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <?php
      $cn=mysqli_connect("localhost","root","","trip");
      $aid=$_SESSION['aid'];
      $s="select * from admin where Id='".$aid."'";
      $result=mysqli_query($cn,$s);
      $r=mysqli_num_rows($result);
      //echo $r;

      while($data=mysqli_fetch_array($result))
      {
      ?>
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php 
           if($data[7]=="avatar15.jpg")
           { 
            ?>
            <img class="img-profile rounded-circle"src="img/avatar15.jpg" style="max-width: 60px">
            <?php 
          } else { 
            ?>
            <img class="img-profile rounded-circle" src="profileimages/<?php  echo $data[7];?>" style="max-width: 60px"> 
            <?php 
          } ?>

          <span class="ml-2 d-none d-lg-inline text-white small"><?php  echo $data[4];?></span>
        </a>
        <?php
      }
     ?>
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="profile.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <a class="dropdown-item" href="change_password.php">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>
</ul>
</nav>