<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
    $type=$_SESSION["usertype"];
    if($type=="Admin"){
?>
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <!-- <div class="sidebar-brand-icon"> 
    <img src="../img/logo.png"> 
 </div>   --> 
    <div class="sidebar-brand-text mx-3">Trip Booking Platform</div>
 </a>     
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm" aria-expanded="true" aria-controls="collapseForm">
      <i class="far fa-file"></i>
      <span>Category Management</span>
    </a>
    <div id="packageForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Categories</h6>
        <a class="collapse-item" href="create_category.php">Create Category</a>
        <a class="collapse-item" href="manage_category.php">Management Category</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm1" aria-expanded="true" aria-controls="collapseForm">
      <i class="far fa-file-alt"></i>
      <span>Subcategory Management</span>
    </a>
    <div id="packageForm1" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Subcategories</h6>
        <a class="collapse-item" href="create_subcategory.php">Create Subcategory</a>
        <a class="collapse-item" href="manage_subcategory.php">Manage Subcategory</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm3" aria-expanded="true" aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Package Management</span>
    </a>
    <div id="packageForm3" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Packages</h6>
        <a class="collapse-item" href="create_package.php">Create Package</a>
        <a class="collapse-item" href="manage_packages.php">Manage packages</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users1" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-calendar-alt"></i>
      <span>Trip Date Management</span>
    </a>
    <div id="users1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Trip Date</h6>
        <a class="collapse-item" href="create_trip_date.php">Create New Trip Date</a>
        <a class="collapse-item" href="manage_trip_date.php">Manage Trip Date</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users2" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-car"></i>
      <span>Car Price Management</span>
    </a>
    <div id="users2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Car Price</h6>
        <a class="collapse-item" href="create_car_price.php">Create New Car Price</a>
        <a class="collapse-item" href="manage_car_price.php">Manage Car Price</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm4" aria-expanded="true" aria-controls="collapseForm">
      <i class="fas fa-ad"></i>
      <span>Ads Management</span>
    </a>
    <div id="packageForm4" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Advertisement</h6>
        <a class="collapse-item" href="create_ads.php">Create Ads</a>
        <a class="collapse-item" href="manage_ads.php">Manage Ads</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="manage_bookings.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Bookings</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_users.php">
      <i class="fas fa-fw fa-user"></i>
      <span>Users</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_users_contact.php">
      <i class="fas fa-address-card"></i>
      <span>Manage User Contact</span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-fw fa-users"></i>
      <span>Admin Management</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Admins</h6>
        <a class="collapse-item" href="admin_register.php">Admin Register</a>
        <a class="collapse-item" href="manage_admin.php">Manage Admin</a>
        <a class="collapse-item" href="change_type.php">Change Type</a>
      </div>
    </div>
  </li>
</ul>
<?php
    }else{
 ?>
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <!-- <div class="sidebar-brand-icon"> 
    <img src="../img/logo.png"> 
 </div>   --> 
    <div class="sidebar-brand-text mx-3">Trip Booking Platform</div>
 </a>     
  <hr class="sidebar-divider my-0">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm" aria-expanded="true" aria-controls="collapseForm">
      <i class="far fa-file"></i>
      <span>Category Management</span>
    </a>
    <div id="packageForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Categories</h6>
        <a class="collapse-item" href="create_category.php">Create Category</a>
        <a class="collapse-item" href="view_category.php">View Category</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm1" aria-expanded="true" aria-controls="collapseForm">
      <i class="far fa-file-alt"></i>
      <span>Subcategory Management</span>
    </a>
    <div id="packageForm1" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Subcategories</h6>
        <a class="collapse-item" href="create_subcategory.php">Create Subcategory</a>
        <a class="collapse-item" href="view_subcategory.php">View Subcategory</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm3" aria-expanded="true" aria-controls="collapseForm">
      <i class="fab fa-fw fa-wpforms"></i>
      <span>Package Management</span>
    </a>
    <div id="packageForm3" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Packages</h6>
        <a class="collapse-item" href="create_package.php">Create Package</a>
        <a class="collapse-item" href="view_packages.php">View packages</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users1" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-calendar-alt"></i>
      <span>Trip Date Management</span>
    </a>
    <div id="users1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Trip Date</h6>
        <a class="collapse-item" href="create_trip_date.php">Create New Trip Date</a>
        <a class="collapse-item" href="view_trip_date.php">View Trip Date</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users2" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-car"></i>
      <span>Car Price Management</span>
    </a>
    <div id="users2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Car Price</h6>
        <a class="collapse-item" href="create_car_price.php">Create New Car Price</a>
        <a class="collapse-item" href="view_car_price.php">View Car Price</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageForm4" aria-expanded="true" aria-controls="collapseForm">
      <i class="fas fa-ad"></i>
      <span>Ads Management</span>
    </a>
    <div id="packageForm4" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Advertisement</h6>
        <a class="collapse-item" href="create_ads.php">Create Ads</a>
        <a class="collapse-item" href="view_ads.php">View Ads</a>
      </div>
    </div>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="view_bookings.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Bookings</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="manage_users.php">
      <i class="fas fa-fw fa-user"></i>
      <span>Users</span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="view_users_contact.php">
      <i class="fas fa-address-card"></i>
      <span>View User Contact</span>
    </a>
  </li>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTable">
      <i class="fas fa-fw fa-users"></i>
      <span>Admin Management</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Admins</h6>
        <a class="collapse-item" href="view_admin.php">View Admin</a>
      </div>
    </div>
  </li>
</ul>
 <?php
                  
    }
?>