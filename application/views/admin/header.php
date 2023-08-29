<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo base_url();?>phd/admin/images/logo-mini.svg" type="image/x-icon">
  <title>PhdCoin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>phd/admin/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>phd/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url();?>phd/admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>phd/admin/js/toastr.min.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>phd/admin/css/style.css">
  <!-- endinject -->
  
  <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>

  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="<?php echo base_url();?>phd/admin/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?php echo base_url();?>phd/admin/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-lg-flex">
            <div class="nav-link">
              <span  id="google_translate_element" data-toggle="dropdown"></span>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="google_translate_element">
                <a class="dropdown-item font-weight-medium" href="#">
                  French
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Espanol
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Latin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Arabic
                </a>
              </div>
            </div>
          </li>
          
		    
		  
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="<?php echo base_url(); ?>Admin/logout">
              <i class="fas fa-power-off"></i>
			  
            </a>
          </li>
        </ul>
        
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
		
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="<?php echo base_url();?>phd/admin/images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?php echo $this->session->userdata('adminusername');?>
                </p>
                <p class="designation">
                  <?php echo $this->session->userdata('rights');?>
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Admin/dash">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          
		  
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#Client" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Client Managment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Client">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/mange_clients">All Clients</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/mange_clients">Add Client</a></li>
              </ul>
            </div>
          </li>
		  
		  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fa far fa-handshake menu-icon"></i>
              <span class="menu-title">Finance Managment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="finance">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/manage_withdraw">Withdwraws</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/manage_deposits">Deposits</a></li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/manage_failed">Cancelled</a></li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/manage_trade">Trading</a></li>
              </ul>
            </div>
          </li>
		  
		  
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Admin/market">
              <i class="fab fa-meetup menu-icon"></i>
              <span class="menu-title">Activites And Products</span>
            </a>
          </li>
		  
		  <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#System" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fa fa-cogs menu-icon"></i>
              <span class="menu-title">System Managment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="System">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/mange_user">Manage Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/manage_settings">General Settings</a></li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>Admin/mange_user">Reports</a></li>
              </ul>
            </div>
          </li>
		  
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Admin/logout">
              <i class="fa fa-power-off menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
		  
		 
		</ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
	  
	  
        