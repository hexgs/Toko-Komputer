<div class=container>
<div class="row page-content">
  <div class="col-lg-12">
    <h2>Signup Form</h2>
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
    <?php echo form_open('daftar/actionregister'); ?>
    
      <div class="form-group">
         <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" placeholder="Nama" required>
      </div>
      <div class="form-group">
         <input type="text" name="email_pelanggan" class="form-control" id="email_pelanggan" placeholder="Email" required>
	  </div>
	  <div class="form-group">
         <input type="text" name="telepon" class="form-control" id="telepon" placeholder="telepon">
      </div>
      <div class="form-group">
         <input type="password" name="password_pelanggan" class="form-control" id="password_pelanggan" placeholder="Password" required>
      </div>
      <div class="form-group">
         <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
      </div>
      <div class="form-group pull-right">
         <button type="submit" id="register" class="btn btn-primary">Daftar</button>
      </div>
    </div>
    <?php echo form_close(); ?>
</div>
</div>
