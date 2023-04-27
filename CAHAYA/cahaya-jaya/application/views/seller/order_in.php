<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2><i class="tf-ion-archive"></i>&nbspAll Orders For Your Store</h2>
        </div>
      </div>
 <table class="table">
  <thead>
    <tr>
      <th width="2%" scope="col">No.</th>
      <th width="10%" scope="col">invoice Status</th>
      <th width="15%" scope="col">Image</th>
      <th width="15%" scope="col">Name Product</th>
      <th width="15%" scope="col">Buyer</th>
      <th width="5%" scope="col">Quantity</th>
      <th width="8%" scope="col">Total</th>
      <th width="10%" scope="col">Shipping Status</th>
      <th width="10%" scope="col">Resi</th>
      <th width="10%" scope="col">Courier</th>
    </tr>
  </thead>
  <?php 
  $i=0;
  foreach ($order as $key) {
    $i++;
    ?>
  <tbody>
  
    <tr>
    <form action="<?php echo base_url('seller/home_seller/shipping_status')?>" method="post">
      <th scope="row"><?php echo $i ?></th>
      <th scope="row"><?php echo $key['payment_status'] ?></th>
      <td><img style="width:130px ;height:130px ;" src="<?php echo base_url() . 'assets/gambar_product/' .$key['product_image']; ?>"></td>
      <td><?php echo $key['product_name'] ?></td>
      <td>
      Name : <?php echo $key['name'] ?> <br>
      Address :<?php echo $key['address'] ?> <br>
      Telp : <?php echo $key['telp'] ?> <br>
      </td>
      <td><?php echo $key['quantity'] ?></td>
      <td><b><?= 'Rp. '.number_format($key['a'],0,',','.'); ?></b></td>
      <td><?php echo $key['shipping_status'] ?></td>

      <td>
      <input type="text" name="resi" class="form-control" style="height: 30px;width: 80px" required></input>
      </td>
      <td>
        <select name="courier" class="form-control" style="width: 80px" required>
          <option value="JNE">JNE</option>
          <option value="JNT">JNT</option>
          <option value="TIKI">TIKI</option>
          <option value="POS">POS</option>
        </select>
      <br>
      <center>
      <?php if($key['payment_status'] == 'Paid') { ?>

      <?php if($key['shipping_status'] == 'On Delivery') { ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }elseif($key['shipping_status'] == 'Already Received') { ?>
       <button type="submit" class="btn btn-sm btn-success">Update</button>
      <?php }else{ ?>
      <button type="submit" onclick="return validasi2();" class="btn btn-sm btn-success">Update</button>
      <?php } ?>

      <?php }elseif ($key['payment_status'] == 'In Progress') { ?>

      <?php if($key['shipping_status'] == 'On Delivery') { ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }elseif($key['shipping_status'] == 'Already Received') { ?>
        <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }else{ ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Update</button>
      <?php } ?>

      <?php }else{ ?>

      <?php if($key['shipping_status'] == 'On Delivery') { ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }elseif($key['shipping_status'] == 'Already Received') { ?>
        <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }else{ ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Update</button>
      <?php } ?>
      <?php } ?>
      </center>
      </td>
      <input type="hidden" name="order_id" value="<?php echo $key['order_id']?>"></input>
      
      </form>
    </tr>
   
  </tbody>

  <?php } ?>
 
</table>



      

</div>
</div>
</section>