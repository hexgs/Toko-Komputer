
<!DOCTYPE html>
<html>

<?php $this->load->view('admin/templates/head'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/templates/header'); ?>  

  <!-- Left side column. contains the logo and sidebar -->
  
  <?php $this->load->view('admin/templates/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php $this->load->view($content); ?>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php $this->load->view('admin/templates/footer');  ?>


</body>
</html>
