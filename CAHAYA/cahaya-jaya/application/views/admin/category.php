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

            <li class="dropdown dropdown-slide">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" aria-haspopup="true" aria-expanded="false"><i class="tf-ion-home"></i>&nbspHome<span class="tf-ion-ios-arrow-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(). 'home_admin'; ?>">Progress</a></li>
          <li><a href="<?php echo base_url(). 'home_admin/index2'; ?>">Clear</a></li>
              </ul>
            </li>


            <!-- Elements -->
            <li>
              <a href="<?php echo base_url(). 'home_admin/category'; ?>"><i class="tf-ion-archive"></i>&nbspCategories</a>
            </li><!-- / Elements -->
            <!-- Elements -->

          </ul><!-- / .nav .navbar-nav
          </div><!--/.navbar-collapse -->
      </div><!-- / .container -->
  </nav>
</section>

<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2><i class="tf-ion-archive"></i>&nbspCategories</h2>
        </div>
      </div>
 <center>
 <table class="table">
  <thead>
    <tr>
      <th  scope="col">No.</th>
      <th  scope="col">Category Id</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
    <p align="right">
    <span class ='btn btn-main' data-toggle="modal" data-target="#addKategori">Create Category</span>
    </p>
  </thead>
  <?php 
  $i=0;
  foreach ($category as $key) {
    $i++;
    ?>
  <tbody> 
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $key['categori_id'] ?></td>
      <td><?php echo $key['category'] ?></td>
      <td>
        <a href="<?php echo base_url('home_admin/delete_category/'.$key['categori_id'])?>"  class ='btn btn-sm btn-danger'>Delete</a>
      </td>
    </tr>
   </form>
  </tbody>
  <?php } ?>
 
</table>
  </center>


</div>
</div>
</section>

  <!-- Modal -->
<!-- =========================================================================================================================>> -->
          <div id="addKategori" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                            <h5 class="modal-title">Tambah Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(). 'home_admin/input'; ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" required class="form-control border-input" value="" name="category">
                                    </div>
                                </div>
                            </div>
                            </div> 

                        
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button id="btn_add" type="submit" class="btn btn-success btn-fill btn-wd">
                                    Tambah Kategori
                                </button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<!--
Start Call To Action
==================================== -->
<section class="section instagram-feed">
  <div class="container">
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

    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/jquery/dist/jquery.js')?>"></script>

    <!-- Main Js File -->
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>
    


  </body>
  </html>