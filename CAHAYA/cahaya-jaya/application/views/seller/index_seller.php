<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2><i class="tf-ion-pricetags"></i>&nbspYour Product</h2>
        </div>
      </div>
 <table class="table">
  <thead>
    <tr>
      <th width="2%" scope="col">No.</th>
      <th width="10%" scope="col">Image</th>
      <th width="20%" scope="col">Product Name</th>
      <th width="35%" scope="col">Description</th>
      <th width="10%" scope="col">Category</th>
      <th width="10%" scope="col">Price</th>
      <th width="10%" scope="col">Stock</th>
      <th width="15%" scope="col">Action</th>
    </tr>
    <p align="right">
    <button class="btn btn-main btn-fill" type="button" data-toggle="modal" data-target="#addBarang">Create Product</button>
    </p>
    
    <br>
  </thead>

  <?php 
  $i=0;
  foreach ($product as $key) {
    $i++;
    ?>
  <tbody>
  
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><img style="width:100px ;height:130px ;" src="<?php echo base_url() . 'assets/gambar_product/' .$key->product_image; ?>"></td>
      <td><?php echo $key->product_name ?></td>
      <td><textarea readonly style="width: 300px; height: 150px;"><?php echo $key->description ?></textarea></td>
      <td><?php echo $key->category ?></td>
      <td>Rp. <?= number_format($key->price,0,',','.');?></td>
      <td><?php echo $key->stock ?></td>
      <td>
      <span class="btn btn-sm btn-success" data-toggle="modal" data-target="#product-modal<?php echo $key->product_id;?>">Update</span>
      </td>
      <td>
      <a href="<?php echo base_url('seller/home_seller/delete_product/'.$key->product_id)?>" onclick="return validasi();" class ='btn btn-sm btn-danger'>Delete</a>
      </td>
    </tr>

    <!-- Modal -->
    <div id="product-modal<?php echo $key->product_id;?>" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                            <h5 class="modal-title">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form id="add" action="<?php echo base_url(). 'seller/home_seller/update_product'; ?>" method="post" enctype="multipart/form-data">
                          <input style="font-size: 15px" style="font-size: 15px" type="hidden" class="form-control" name="product_id" value="<?php echo $key->product_id?>">
                          <input style="font-size: 15px" style="font-size: 15px" type="hidden" class="form-control" name="product_image2" value="<?php echo $key->product_image?>">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <img style="width:150px ;height:150px ;" src="<?php echo base_url() . 'assets/gambar_product/' .$key->product_image; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" required class="form-control border-input" value="<?= $key->product_name;?>" name="product_name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea name="description" class="form-control border-input" value='<?= $key->description;?>' required cols="30" rows="5"><?= $key->description;?></textarea>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required class="form-control border-input" value="<?= $key->stock;?>" name="stock">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="categori_id" class="form-control">
                                          <option selected value="<?php echo $key->categori_id?>" required><?php echo $key->category?></option>
                                        <?php foreach ($category as $c) { ?>
                                        <option value="<?php echo $c->categori_id?>"><?php echo $c->category?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>         
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control border-input" value="<?= $key->price;?>" name="price">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" name="product_image">
                                    </div>
                                </div> 
                            </div> 
                        
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button id="btn_add" type="submit" class="btn btn-success btn-fill btn-wd">
                                    Edit Barang
                                </button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

   
  </tbody>

  <!-- Modal -->
  

   <?php } ?>
   
</table>

   
      

</div>
</div>
</section>

              <div id="addBarang" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                            <h5 class="modal-title">Tambah Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form id="add" action="<?php echo base_url(). 'seller/home_seller/create_product'; ?>" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="account_id" value="<?php echo $this->session->userdata('account_id') ?>">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" required class="form-control border-input" value="" name="product_name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea name="description" class="form-control border-input" required cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required id="stock" class="form-control border-input" value="" name="stock">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="categori_id" class="form-control">
                                        <?php foreach ($category as $key): ?>
                                        <option value="<?php echo $key->categori_id?>"><?php echo $key->category?></option>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>         
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control border-input" value="" name="price">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" name="product_image" required>
                                    </div>
                                </div> 
                            </div> 
                        
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button id="btn_add" type="submit" class="btn btn-success btn-fill btn-wd">
                                    Tambah Barang
                                </button>
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

