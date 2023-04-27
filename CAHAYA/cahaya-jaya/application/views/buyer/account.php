


<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <h1 class="page-name">Account</h1>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="page-wrapper bg-gray">
  <div class="contact-section">
    <div class="container">
      <div class="row">
        
        <!-- Contact Details -->
        
        <?php foreach ($account as $key) { ?>
        <div class="contact-details col-md-6 " >
          <div class="google-map">
            <img src="<?php echo base_url().'/assets/profile/'.$key->image ?>" style="width: 500px; height: 500px;">
          </div>

        </div>

        <div class="contact-details col-md-6 " >
        <ul class="contact-short-info" >
            <li>
              <i class="tf-ion-edit" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Name: <?php echo $key->name ?></span>
            </li>
            <li>
              <i class="tf-ion-person" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Username: <?php echo $key->username ?></span>
            </li>
            <li>
              <i class="tf-ion-key" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Password: *****</span>
            </li>
            <li>
              <i class="tf-ion-android-mail" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Email: <?php echo $key->email ?></span>
            </li>
            <li>
              <i class="tf-ion-ios-home" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Address: <?php echo $key->address ?></span>
            </li>
            <li>
              <i class="tf-ion-map" style="font-size: 30px"></i>
              <span style="font-size: 20px">  City: <?php echo $key->city ?></span>
            </li>
            <li>
              <i class="tf-ion-android-phone-portrait" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Phone: <?php echo $key->telp ?></span>
            </li>

            <li>
              <i class="tf-ion-card" style="font-size: 30px"></i>
              <span style="font-size: 20px">  Rekening: <?php echo $key->rekening ?></span>
            </li>

            <li>
              <i class="tf-ion-cash" style="font-size: 30px"></i>
              <span style="font-size: 20px"><?= 'Rp. '.number_format($key->saldo,0,',','.'); ?></span>
            </li>
            <br>
            <li>
            <!-- <span data-toggle="modal" data-target="#product-modal<?php echo $key->account_id?>" class="btn btn-main">Edit Profile</span> -->
            <button type="button" class='btn btn-main' data-toggle='modal' data-target='#product-modal<?= $key->account_id; ?>'>Edit Profile</button>
            </li>

          </ul>


          </div> 
           <!-- Modal -->
        <div class="modal fade" id="product-modal<?php echo $key->account_id;?>">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="tf-ion-close"></i>
      </button>
        <div class="modal-dialog " role="document">
          <div class="modal-content">

             <div class="modal-header">
                            <h5 class="modal-title">Edit Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
              <div class="modal-body">

                    <form action="<?php echo base_url(). 'buyer/home_buyer/update_account'; ?>" method="post" enctype="multipart/form-data">

                    <input style="font-size: 15px" style="font-size: 15px" type="hidden" class="form-control" name="id" value="<?php echo $key->account_id?>">
                    <input style="font-size: 15px" style="font-size: 15px" type="hidden" class="form-control" name="image2" value="<?php echo $key->image?>">

                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                    <span>Nama</span>
                    <input style="font-size: 15px" style="font-size: 15px" type="text" class="form-control" name="name" value="<?php echo $key->name?>">
                    </div>
                </div>
                    
                    <div class="col-md-6">
                    <div class="form-group">
                    <span>Foto</span>
                    <input type="file" class="form-control" name="image">
                    </div>
                </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                    <span>Username</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="username" value="<?php echo $key->username?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <span>Password</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="password" value="<?php echo $key->password?>">
                    </div>
                </div>
                </div>

                <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                    <span>Email</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="email" value="<?php echo $key->email?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <span>No. Telp</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="telp" value="<?php echo $key->telp?>">
                    </div>
                </div>
                </div>
                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span>Alamat</span>
                                        <textarea name="address" value="<?= $key->address;?>" class="form-control border-input" required cols="30" rows="5"><?php echo $key->address?></textarea>
                                    </div>
                                </div>
                            </div> 

                <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                    <span>Kota</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="city" value="<?php echo $key->city?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <span>Rekening</span>
                    <input style="font-size: 15px" type="text" class="form-control" name="rekening" value="<?php echo $key->rekening?>">
                    </div>
                </div>
                </div>
                      <button type="submit" class="btn btn-main">Edit</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </form>
                  </div>
                </div>
              </div>
          </div>
          
         
    

          <?php } ?>
          
        
      
      </div> <!-- end row -->
    </div> <!-- end container -->
  </div>
</section>
