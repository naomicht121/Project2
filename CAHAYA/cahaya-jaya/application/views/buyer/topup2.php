<section class="products section bg-gray">
  <div class="container">
    <div class="row">
    <center>
      <div class="panel panel-default" style="width: 500px; height: 300px;">
        <div class="panel-heading">
          <b>Topup Saldo</b>
        </div>
        <div class="panel-body">
        <img src="<?php echo base_url('assets/images/money.png')?>" style="width: 230px; height: 100px;">
        <br>
        <br>
        <form action="<?php echo base_url('buyer/home_buyer/topup')?>" method="post">
        <div class="input-group subscription-form">
              <input type="text" class="form-control" name="nominal" placeholder="Nominal Saldo" onkeypress="return hanyaAngka(event)" required>
              <span class="input-group-btn">
                <button class="btn btn-main" type="sumbit">Topup</button>
              </span>
              
            </div><!-- /input-group -->
            </form>
        </div>      
      </div>

      </center>
    </div>
  </div>
</section>

<section class="product-category section" style="background-color: #c4bcbb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title text-center">
          <h2><i class="tf-ion-cash"></i>&nbspTopup History</h2>
        </div>
      </div>
 <table class="table">
  <thead>
    <tr>

      <th width="5%" scope="col">No.</th>
      <th width="30%" scope="col">Nominal</th>
      <th width="20%" scope="col">Unique Key</th>
      <th width="30%" scope="col">Date</th>
      <th width="30%" scope="col">Status</th>
      <th width="10%" scope="col">Action</th>

    </tr>
  </thead>
  <?php
        $i=0;
        // $this->_cart_contents[$rowid]['rowid'] = $rowid;
              foreach ($code as $items){
        // $grand_total=$total + $items['']
        $i++;
      ?>
  <tbody>
  <form action="<?php echo base_url('bank/topup')?>" method="post">
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td>
        <b><?= 'Rp. '.number_format($items->nominal,0,',','.'); ?></b>
        <input type="hidden" name="nominal" value="<?php echo $items->nominal ?>"></input>
      </td>
      <td>
        <?php echo $items->uniq_key ?>
        <input type="hidden" name="uniq_key" value="<?php echo $items->uniq_key ?>"></input>
      </td>
      <td><?php echo $items->date ?></td>
      <td>
        <?php echo $items->status ?>
        <input type="hidden" name="status" value="<?php echo $items->status ?>"></input>
      </td>
      <td>
      <?php if ($items->status == 'Not Used') { ?>
      <button class="btn btn-sm btn-success" type="submit">Check</button>
      <?php }elseif ($items->status == 'Used'){ ?>
      <button class="btn btn-sm btn-success" type="submit" disabled>Success</button>
      <?php } ?>
      </td>
    </tr>
    </form>
  </tbody>
      <?php } ?>
</table>
</div>
</div>
</section>
