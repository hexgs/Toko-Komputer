<!-- <?php var_dump($pelanggan); ?> -->
<?php 
  if($pembelian)
  {
   foreach ($pembelian as $total) 
  { 
?>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              
              <h3><?php echo $total->total?></h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url() ?>admin/transaction" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
<?php
  }
}
?>

<?php 
  if($pelanggan)
  {
   foreach ($pelanggan as $total) 
  { 
?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3><?php echo $total->total?></h3>
              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url() ?>admin/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <?php
  }
}
?>