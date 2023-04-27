<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2>Shopping Cart</h2>
        </div>
      </div>
 <table class="table">
  <thead>
    <tr>

      <th width="2%" scope="col">No.</th>
      <th width="10%" scope="col">Image</th>
      <th width="33%" scope="col">Name Product</th>
      <th width="17%" scope="col">Seller</th>
      <th width="8%" scope="col">Quantity</th>
      <th width="15%" scope="col">Price */stock</th>
      <th width="15%" scope="col">Total</th>
      <th width="10%" scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $i=0;
        $total=0;
        // $this->_cart_contents[$rowid]['rowid'] = $rowid;
              foreach ($this->cart->contents() as $items):
        $subtotal = ($items['qty'] * $items['price']);
        // $grand_total=$total + $items['']
        $i++;
      ?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><img style="width:100px ;height:130px ;" src="<?php echo base_url() . 'assets/gambar_product/' .$items['product_image']; ?>"></td>
      <td hidden><?php echo $items['product_id'] ?></td>
      <td><?php echo $items['name'] ?></td>
      <td><?php echo $items['nama'] ?></td>
      <td><?php echo $items['qty'] ?></td>
      <td><?php echo 'Rp. '.number_format($items['price'],0,',','.') ?></td>

      <td><?php echo 'Rp. '.number_format($subtotal,0,',','.') ?></td>
      
      <td>
      <center>
      <a href="<?php echo base_url('buyer/home_buyer/remove_item/'.$items['rowid']); ?>" class="remove"><i class="tf-ion-close"></i></a>
      <?php endforeach; ?>
      </center>
      </td>
    </tr>
  </tbody>
  <tr>
      <td colspan="3"><b>Order Total: <?= 'Rp. '.number_format($this->cart->total(),0,',','.'); ?></b></td>
      <td colspan="4" align="right">
      <a href="<?php echo base_url()?>buyer/home_buyer/clear_cart"  class ='btn btn-sm btn-danger'>Empty The Cart</a>
      <a href="<?php echo base_url()?>buyer/home_buyer/shop" class='btn btn-sm btn-success'  type="submit">Update Cart</a>
      
      <a href="<?php echo base_url()?>buyer/home_buyer/order"  class ='btn btn-sm btn-primary'>Check Out</a>
  </tr>
</table>

      

</div>
</div>
</section>