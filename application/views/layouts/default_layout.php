<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Insignia | <?php echo $title; ?></title>

	<link rel="icon" href="<?php echo base_url()?>/assets/images/logo.jpg" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/wimo.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datatables.css">
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatablesbs4.js"></script>
    
  </head>
  <body>
	  
  <div class="primary-nav">

    <button href="#" class="hamburger open-panel nav-toggle">
      <span class="screen-reader-text">Menu</span>
    </button>

    <nav role="navigation" class="menu">

      <a href="<?php echo base_url()?>" class="logotype">Insignia</a>

      <div class="overflow-container">

        <ul class="menu-dropdown">
          <li>
            <a class="<?php echo ($title == 'Dashboard') ? 'menu-active':''; ?>" href="<?php echo base_url()?>">Dashboard</a>
            <span class="icon <?php echo ($title == 'Dashboard') ? 'icon-active':''; ?>"><i class="fas fa-chart-line"></i></span>
          </li>

          <li>
            <a class="<?php echo ($title == 'Orders') ? 'menu-active':''; ?>" href="<?php echo base_url()?>order">Orders</a>
            <span class="icon <?php echo ($title == 'Orders') ? 'icon-active':''; ?>"><i class="fas fa-shopping-cart"></i></span>
          </li>

          <li>
            <a class="<?php echo ($title == 'Contact') ? 'menu-active':''; ?>" href="<?php echo base_url()?>order">Contact</a>
            <span class="icon <?php echo ($title == 'Contact') ? 'icon-active':''; ?>"><i class="fas fa-id-badge"></i></span>
          </li>

        </ul>

      </div>

    </nav>

  </div>

  <div class="new-wrapper">

    <div class="nav-horizontal">
      <div class="nav-h-menu">
        <span><i class="fas fa-adjust"></i></span>
      </div>
      <div class="nav-h-menu dropdown">
        <span>irawandwihastomo@ymail.com <i class="fas fa-arrow-circle-down"></i></span>
        <div class="dropdown-content">
          <p>Profile</p>
          <p>Logout</p>
        </div>
      </div>
    </div>

    <div id="main">

      <div id="main-contents">

        <?php echo $contents; ?>

      </div>

    </div>

  </div>
    

  
  <script src="<?php echo base_url()?>assets/js/sidebar.js"></script>
  <script src="<?php echo base_url()?>assets/js/fontawesome/all.js"></script>
  <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/numberonly.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
  </body>
</html>