<!-- <form action="action_page.php">
  <div class="imgcontainer">
  	<img style="width:150px;height:150px;" src="<?= config_item('base_url()'); ?>assets/FRONT/img/default.png" alt="">
  </div>

  <div class="container">
	<div class="login-form-box">
		<form class="login-form" method="post">  
			<label for="email_pelanggan"><b>Email</b></label>
			<input type="text" placeholder="Email" name="email_pelanggan" id="email_pelanggan" required>

			<label for="password_pelanggan"><b>Password</b></label>
			<input type="password" placeholder="Password" name="password_pelanggan" id="password_pelanggan" required>

			<button type="submit">Login</button>
			<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</form>
	</div>	
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="password_pelanggan">Forgot <a href="#">password?</a></span>
  </div>
</form> -->
<br>
<div class="container">
  <div class="row content-center">
    <div class="col-md">
      <div class="imgcontainer">
        <center><img style="width:150px;height:150px;" src="<?= base_url(); ?>assets/FRONT/img/default.png" alt=""></center>
      </div>
      <br>
      <!-- <h2>Login Form</h2> -->
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger">
          <?php echo validation_errors(); ?>
        </div>
      <?php } ?>
      <?php if ($this->input->get('msg') == 1) { ?>
        <div class="alert alert-danger">
          Please Enter Your Valid Information.
        </div>
      <?php } ?>
      <?php echo form_open('login/dologin'); ?>

      <div class="form-group">
        <input type="text" name="email_pelanggan" class="form-control" id="email_pelanggan" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="password" name="password_pelanggan" class="form-control" id="password_pelanggan" placeholder="Password" required>
      </div>
      <div class="form-group pull-right">
        <button type="submit" id="login" class="btn btn-primary">Login</button>
      </div>

    </div>

    <?php echo form_close(); ?>

  </div>
</div>