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
            <p class="price"><b><?= 'Rp. '.number_format($key->price,0,',','.'); ?></b></p>
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
    <div class="modal product-modal fade" id="product-modal<?php echo $key->product_id;?>">
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
                      </p>
                      <a href="<?php echo base_url('buyer/home_buyer/product_detail/'.$key->product_id)?>" class="btn btn-main">View Product Details</a>
                      <!-- <a href="product-single.html" class="btn btn-transparent">View Product Details</a> -->
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <?php } ?>
    <!-- /.modal -->

    </div>
  </div>
</section>

