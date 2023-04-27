<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Cahaya Jaya Poltekpos">
  
  <meta name="author" content="Themefisher.com">

  <title>Cahaya Jaya</title>

   <!-- put first the jquery path, otherwise the bootstrap.js won't work-->
    <script src="js/jquery/jquery-3.1.0.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png')?>" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/themefisher-font/style.css')?>">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/slick-carousel/slick/slick.css')?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/slick-carousel/slick/slick-theme.css')?>"/>
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="contact-number">
          <i class="tf-ion-ios-telephone"></i>
          <span>0129- 12323-123123</span>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Site Logo -->
        <div class="logo text-center">
          <a href="index.html">
            <!-- replace logo here -->
            <svg width="270px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="30" font-family="AustinBold, Austin" font-weight="bold">
                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                        <text id="AVIATO">
                            <tspan x="80.94" y="325">CAHAYA JAYA</tspan>
                        </text>
                    </g>
                </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
      <!-- Cart -->
      <ul class="top-menu text-right list-inline">
            <li class="dropdown cart-nav dropdown-slide">
              <a href="<?php echo base_url(). 'buyer/home_buyer/cart'; ?>"><i class="tf-ion-android-cart"></i>Cart</a>
            </li><!-- / Cart -->

            <!-- Search -->
            <li class="dropdown search dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
              <ul class="dropdown-menu search-dropdown">
                <li><form action="<?php echo base_url(). 'buyer/home_buyer/shop'; ?>" method="get"><input type="search" name="search" class="form-control" id="search" placeholder="Search..."></form></li>
              </ul>
            </li>
            <!-- / Search -->

            <li>
              <a href="<?php echo base_url(). 'buyer/home_buyer/logout'; ?>"><i class="tf-ion-log-out"></i> Logout</a>
            </li>

          </ul><!-- / .nav .navbar-nav .navbar-right -->
      </div>
    </div>
  </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
  <nav class="navbar navigation">
      <div class="container">
        <div class="navbar-header">
          <h2 class="menu-title">Main Menu</h2>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div><!-- / .navbar-header -->

        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav">

            <!-- Home -->
            <li class="dropdown ">
              <a href="<?php echo base_url(). 'buyer/home_buyer'; ?>"><i class="tf-ion-home"></i>&nbspHome</a>
            </li><!-- / Home -->


            <!-- Elements -->
           <li>
              <a href="<?php echo base_url(). 'seller/home_seller'; ?>"><i class="tf-ion-pricetags"></i>&nbspManage Product</a>
            </li><!-- / Pages -->
            <!-- Elements -->

           <li class="dropdown dropdown-slide">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" aria-haspopup="true" aria-expanded="false"><i class="tf-ion-archive"></i>&nbspOrders In<span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(). 'seller/home_seller/order_in'; ?>">On Progress Payment</a></li>
          <li><a href="<?php echo base_url(). 'seller/home_seller/order_in2'; ?>">On Delivery</a></li>
          <li><a href="<?php echo base_url(). 'seller/home_seller/order_in3'; ?>">Already Received</a></li>
          </ul>
          </li>

            <li class="dropdown dropdown-slide">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" aria-haspopup="true" aria-expanded="false"><i class="tf-ion-cash"></i>&nbspTop Up<span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(). 'buyer/home_buyer/voucher'; ?>">Topup And Check</a></li>
          <li><a href="<?php echo base_url(). 'buyer/home_buyer/voucher2'; ?>">History</a></li>

          </ul><!-- / .nav .navbar-nav
          </div><!--/.navbar-collapse -->
      </div><!-- / .container -->
  </nav>
</section>