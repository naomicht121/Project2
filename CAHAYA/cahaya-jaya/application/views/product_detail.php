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




<section class="single-product bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			</div>
		</div>
		<?php foreach ($barang as $key) { ?>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img style="width: 400px; height: 500px;" src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" alt='' data-zoom-image="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" />
								</div>
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			<form action="<?php echo base_url('index/form_login');?>" method="post">
			<div class="col-md-7">
				<div class="single-product-details">
					<h2><?php echo $key->product_name ?></h2>
					<p class="product-price"><b><?= 'Rp. '.number_format($key->price,0,',','.'); ?></b></p>
					
					<p class="product-description mt-20" style="word-wrap:break-word;">
						<?php echo $key->description ?>
					</p>	

					
						<input hidden name="product_id" value="<?php echo $key->product_id ?>">
						<input hidden name="product_name" value="<?php echo $key->product_name ?>">
						<input hidden name="price" value="<?php echo $key->price ?>">
						<input hidden name="product_image" value="<?php echo $key->product_image ?>">
					<div class="product-quantity" >
						<span>Seller:</span>
						<input type="text" readonly style="width: 250px; font-size: 20px" class="form-control" name="nama" value="<?php echo $key->name ?>">
						<input type="hidden" readonly style="width: 250px; font-size: 20px" class="form-control" name="id_seller" value="<?php echo $key->account_id ?>">
					</div>


						<input type="hidden" readonly style="width: 250px; font-size: 20px" class="form-control" name="account_id" value="<?php echo $key->account_id ?>">

					<div class="product-quantity">
						<span>Quantity:</span>
						*Stock : <?php echo $key->stock ?>
					</div>
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							<a href="#"><?php echo $key->category ?></a>
						</ul>
					</div>
					<button type="submit" class="btn btn-main mt-20">Add To Cart</button>
				</div>
			</div>
			</form>
		</div>
		<?php } ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<!-- <li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li> -->
						<li class="active"><a data-toggle="tab" href="#reviews" aria-expanded="true">Reviews</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="reviews" class="tab-pane fade active in">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    <!-- Comment Item start-->
								    <li class="media">
								    <?php foreach ($comment as $keys) { ?>

								        <a class="pull-left" href="#">
								            <img class="media-object comment-avatar" src="<?php echo base_url().'/assets/profile/'.$keys->image ?>" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a><?php echo $keys->name?></a>
								                	
								                </h4>
								                <time datetime="2013-04-06T13:53"><?php echo $keys->date?></time>
								                <a class="comment-button"><i class="tf-ion-chatbubbles"></i></a>
								            </div>

								            <p>
								                <?php echo $keys->comment?>
								            </p>
								        </div>

								    <?php } ?>

								    </li>
							<!-- End Comment Item -->
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="products related-products section">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Related Products</h2>
			</div>
		</div>
		<div class="row">
		<?php foreach ($related as $key) {?>
			<div class="col-md-3">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage"><?php echo $key->category?> </span>
						<img class="img-responsive" style="width: 300px; height: 350px" src="<?php echo base_url().'/assets/gambar_product/'.$key->product_image ?>" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<a href="<?php echo base_url('index/product_detail/'.$key->product_id.'/'.$key->categori_id)?>">
										<i class="tf-ion-ios-search"></i>
									</a>
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html"><?php echo $key->product_name?></a></h4>
						<p class="price"><b><?= 'Rp. '.number_format($key->price,0,',','.'); ?></b></p>
					</div>
				</div>
			</div>
		<?php } ?>
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