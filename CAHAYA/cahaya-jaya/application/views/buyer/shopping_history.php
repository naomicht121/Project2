<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2><i class="tf-ion-ios-briefcase"></i>&nbspShopping History</h2>
        </div>
      </div>
 <table class="table" id="tabel-data">
  <thead>
    <tr>
      <th width="2%" scope="col">No.</th>
      <th width="2%" scope="col">Invoice</th>
      <th width="15%" scope="col">Image</th>
      <th width="18%" scope="col">Name Product</th>
      <th width="15%" scope="col">Seller</th>
      <th width="8%" scope="col">Quantity</th>
      <th width="10%" scope="col">Total</th>
      <th width="16%" scope="col">Shipping Status</th>
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
    <form action="<?php echo base_url('buyer/home_buyer/shipping_status')?>" method="post">
      <th scope="row"><?php echo $i ?></th>
      <td><a href="<?php echo base_url('buyer/home_buyer/invoice_detail/'.$key['invoice_id']);?>"><?php echo $key['invoice_id'] ?></a></td>
      <td><img style="width:130px ;height:130px ;" src="<?php echo base_url() . 'assets/gambar_product/' .$key['product_image']; ?>"></td>
      <td><a href="<?php echo base_url('buyer/home_buyer/product_detail/'.$key['product_id'].'/'.$key['categori_id']);?>"><?php echo $key['product_name'] ?><a></td>
      <td><?php echo $key['name'] ?></td>
      <td><?php echo $key['quantity'] ?></td>
      <td><b><?= 'Rp. '.number_format($key['p'],0,',','.'); ?></b></td>
      <td><?php echo $key['shipping_status'] ?> <br>
      <input type="hidden" name="order_id" value="<?php echo $key['order_id']?>"></input>
      <input type="hidden" name="total" value="<?php echo $key['p'];?>"></input>
      <input type="hidden" name="account_id" value="<?php echo $key['account_id']?>"></input>
      <br>
      <?php if($key['shipping_status'] == 'On Progress') { ?>
      <button type="submit" class="btn btn-sm btn-success" disabled>Cant Update</button>
      <?php }elseif($key['shipping_status'] == 'Already Received') { ?>
        <button type="submit" class="btn btn-sm btn-success" disabled>Succes</button>
      <?php }else{ ?>
      <button type="submit" onclick="return validasi();" class="btn btn-sm btn-success" >Update</button>
      <?php } ?>
      </td>
      <td><?php echo $key['resi'];?></td>
      <td><?php echo $key['courier'];?></td>
   </form>
    </tr>
  </tbody>
  <?php } ?>

  <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
 
 
</table>

      

</div>
</div>
</section>