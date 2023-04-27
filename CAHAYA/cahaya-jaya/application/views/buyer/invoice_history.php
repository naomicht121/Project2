<section class="products section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <?php foreach ($saldo as $saldo) { ?>
          <h2 align="right">Saldo Rp. <?= number_format($saldo->saldo,0,',','.');?></h2>
          <?php } ?>
        <div class="title text-center">
          <h2><i class="tf-ion-ios-copy"></i>&nbspInvoice History</h2>
        </div>
      </div>
 <table class="table" id="tabel-data">

  <thead>
      <th width="5%" scope="col">No.</th>
      <th width="15%" scope="col">Invoice ID</th>
      <th width="25%" scope="col">Total Price</th>
      <th width="28%" scope="col">Order Date</th>
      <th width="35%" scope="col">Payment Status</th>
      <th width="35%" scope="col">Payment</th>
    </tr>
  </thead>
  <?php 
  $i=0;
  foreach ($invoice as $key):
    $i++;
    ?>
  <tbody>
    <tr>
    <form action="<?php echo base_url('buyer/home_buyer/payment')?>" method="post">
      <th scope="row"><?php echo $i ?></th>
      <td><a href="<?php echo base_url('buyer/home_buyer/invoice_detail/'.$key->invoice_id);?>"><?php echo $key->invoice_id ?></a>
      <input name="invoice_id" type="hidden" value="<?php echo $key->invoice_id?>"></td>
      <td><b><?= 'Rp. '.number_format($key->price,0,',','.'); ?></b></td>
      <input name="price" type="hidden" value="<?php echo $key->price?>"></input></td>
      <td><?php echo $key->date ?></td>
      <td><?php echo $key->payment_status ?></td>
      <td>
      <?php if ($key->saldo > $key->price) { ?>
      <?php if ($key->payment_status == 'Cancelled' ){ ?>
      <button class="btn btn-sm btn-success" disabled>Cancelled</button>
      <?php }elseif($key->payment_status == 'Paid'){ ?>
      <button class="btn btn-sm btn-success" disabled>Success</button>
      <?php }else{ ?>
      <button class="btn btn-sm btn-success" type="submit" onclick="return validasi2();">Pay</button>
      <?php } ?>
      <?php }else{ ?>
      <?php if ($key->payment_status == 'Cancelled' ){ ?>
      <button class="btn btn-sm btn-success" disabled>Cancelled</button>
      <?php }elseif($key->payment_status == 'Paid'){ ?>
      <button class="btn btn-sm btn-success" disabled>Success</button>
      <?php }else{ ?>
      <button class="btn btn-sm btn-success" type="submit" disabled>Pay</button>
      <?php } ?>
      <?php } ?>
      </td>
      </form>
    </tr>

  </tbody>
  <?php endforeach; ?>

  <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
 
</table>

      

</div>
</div>
</section>
