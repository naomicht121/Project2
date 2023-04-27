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
            </li><!-- / Cart -->

                        <!-- Search -->
            <li class="dropdown search dropdown-slide">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
              <ul class="dropdown-menu search-dropdown">
                <li><form action="<?php echo base_url(). 'index'; ?>" method="get"><input type="search" name="search" class="form-control" id="search" placeholder="Search..."></form></li>
              </ul>
            </li>
            <!-- / Search -->

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


            <!-- Blog -->
            <li class="dropdown dropdown-slide">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" aria-haspopup="true" aria-expanded="false"><i class="tf-ion-ios-person"></i>&nbspAccount<span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(). 'index/form_registration'; ?>">Registration</a></li>
          <li><a href="<?php echo base_url(). 'index/form_login'; ?>">SignIn</a></li>
              </ul>
            </li><!-- / Blog -->

          </ul><!-- / .nav .navbar-nav
          </div><!--/.navbar-collapse -->
      </div><!-- / .container -->
  </nav>
</section>


<div class="home-slider">
    <div>
      <div class="slider-item white-bg" align="center" style="background-image:url('<?php echo base_url();?>assets/images/slider/slider-1.jpg');">
      <div class="container">
        <div class="slide-inner text-center">
          <h1>Welcome Smart Seller or Buyer :)</h1>
          <p>Be a smart buyer and seller with the convenience offered by the latest technology.</p>
          <a href="<?php echo base_url(). 'index/form_login'; ?>" class="btn btn-main">Buy Now</a>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- 
<div class="home-slider">
  <div>
    <div class="slider-item dark-bg overly" style="background-image:url('<?php echo('assets/images/slider/slider-1.jpg');?>'">
      <div class="container">
        <div class="slide-inner text-left">
          <h1>Minimal  Summer Collection</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aut illum ratione? <br> Aliquam facilis dolorem dolor illum saepe commodi ratione.</p>
          <a href="" class="btn btn-main">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="slider-item dark-bg overly" style="background-image:url('<?php echo('assets/images/slider/slider-2.jpg');?>')">
      <div class="container">
        <div class="slide-inner text-center">
          <h1>Weeding Business & Casual</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aut illum ratione? <br> Aliquam facilis dolorem dolor illum saepe commodi ratione.</p>
          <a href="" class="btn btn-main">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="slider-item white-bg" style="background-image:url('images/slider/slider-3.jpg'); background-position:50%;background-repeat:no-repeat;">
      <div class="container">
        <div class="slide-inner text-left">
          <h1>Stylish & Scalable</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aut illum ratione? <br> Aliquam facilis dolorem dolor illum saepe commodi ratione.</p>
          <a href="" class="btn btn-main">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
</div> -->


<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="title text-center">
        <h2>Trendy Products</h2>
      </div>
    </div>
    <div class="row">

    <!-- Main Menu Section -->
<section class="menu">
  <nav class="navbar navigation">

        <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav">

            <!-- Blog -->
            <li class="dropdown dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
              <?php foreach ($category as $key) { ?>
          <li><a href="<?= base_url('index/index/'.$key->categori_id);?>"><?= $key->category;?></a></li>
              <?php } ?>
              </ul>
            </li><!-- / Blog -->

          </ul><!-- / .nav .navbar-nav
          </div><!--/.navbar-collapse -->
      </div><!-- / .container -->
  </nav>
</section>

   <?php foreach ($barang as $key) { ?>  
          <?php if($key->stock > 0){ ?>
      <div class="col-md-4">
        <div class="product-item">
          <div class="product-thumb">
          <span class="bage"><?php echo $key->category?> </span>
            <img class="img-responsive" src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" style="height:400px;width:500px" alt="product-img" />
            <div class="preview-meta">
              <ul>
                <li>
                   <a href="<?php echo base_url('index/product_detail/'.$key->product_id.'/'.$key->categori_id)?>"><i class="tf-ion-ios-search-strong"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="product-content">
            <h4><a href="product-single.html"><?php echo $key->product_name ?></a></h4>
            <p class="price">Rp. <?php echo $key->price ?></p>
          </div>
        </div>
      </div>
      <?php }else{ ?>

       <div class="col-md-4">
        <div class="product-item">
          <div class="product-thumb">
            <img class="img-responsive" src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" style="height:400px;width:500px" alt="product-img" />
          </div>
          <div class="product-content">
            <h4><?php echo $key->product_name ?></h4>
            <p class="price"><?php echo ('Out Of Stock!');?></p>
          </div>
        </div>
      </div>
      <?php } ?>
      
    
    <!-- Modal -->
    <!-- <div class="modal product-modal fade" id="product-modal<?php echo $key->product_id;?>">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="tf-ion-close"></i>
      </button>
        <div class="modal-dialog " role="document">
          <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="modal-image">
                      <img class="img-responsive" src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" style="height:420px;width:350px" alt="product-img" />
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-short-details">
                      <h2 class="product-title"><?php echo $key->product_name ?></h2>
                      <p class="product-price">Rp. <?php echo $key->price ?></p>
                      <p class="product-description" style="word-wrap:break-word;">
                        <?php echo $key->description; ?>
                        <!-- asjdnajsndjansjdnasjndjasndjansdjnasjdnjasndjansdjnasjdnasjdnajsndja -->
                     <!--  </p>
                      <a href="<?php echo base_url('buyer/home_buyer/product_detail/'.$key->product_id)?>" class="btn btn-main">View Product Details</a> -->
                      <!-- <a href="product-single.html" class="btn btn-transparent">View Product Details</a> -->
                   <!--  </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div> -->
    <?php } ?>
    <!-- /.modal -->

    </div>
  </div>
</section>

<!--
Start Call To Action
==================================== -->

<section class="section instagram-feed">
  <div class="container">
    <div class="row">
      <div class="title">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
</section>



<footer class="footer section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="social-media">
          <li>
            <a href="">
              <i class="tf-ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-instagram"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-pinterest"></i>
            </a>
          </li>
        </ul>
        <ul class="footer-menu">
          <li>
            <a href="">CONTACT</a>
          </li>
          <li>
            <a href="">SHIPPING</a>
          </li>
          <li>
            <a href="">TERMS OF SERVICE</a>
          </li>
          <li>
            <a href="">PRIVACY POLICY</a>
          </li>
        </ul>
        <p class="copyright-text">Powered by Bootstrap</p>
      </div>
    </div>
  </div>
</footer>


    <!-- 
    Essential Scripts
    =====================================-->
    

    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Instagram Feed Js -->
    <script src="<?php echo base_url('assets/plugins/instafeed.js/instafeed.min.js')?>"></script>
    <!-- Slick Carousel -->
    <script src="<?php echo base_url('assets/plugins/slick-carousel/slick/slick.min.js')?>"></script>
    <!-- Google Map js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>

    <!-- Main Js File -->
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>
    


  </body>
  </html>

