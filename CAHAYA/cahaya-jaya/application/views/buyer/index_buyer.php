<div class="home-slider">
    <div>
      <div class="slider-item white-bg" style="background-image:url('<?php echo base_url();?>assets/images/slider/slider-1.jpg')">
      <div class="container">
        <div class="slide-inner text-center">
          <h1>Welcome <?php echo $this->session->userdata('name') ?>, You Are A Smart Seller or Buyer :)</h1>
          <p>Be a smart buyer and seller with the convenience offered by the latest technology.</p>
          <a href="<?php echo base_url(). 'buyer/home_buyer/shop'; ?>" class="btn btn-main">Buy Now</a>
        </div>
      </div>
    </div>
    </div>
</div>



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
          <li><a href="<?= base_url('buyer/home_buyer/shop/'.$key->categori_id);?>"><?= $key->category;?></a></li>
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
                   <a href="<?php echo base_url('buyer/home_buyer/product_detail/'.$key->product_id.'/'.$key->categori_id)?>"><i class="tf-ion-ios-search-strong"></i></a>
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
      
    <?php } ?>
    

    </div>
  </div>
</section>





