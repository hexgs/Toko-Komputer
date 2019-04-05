
<!DOCTYPE html>
<html>

<?php $this->load->view('admin/templates/header'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



  <!-- Left side column. contains the logo and sidebar -->
  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $judul ?>
        <!-- <small>Control panel</small> -->
      </h1>
      
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
  
  <?php $this->load->view('public/templates/footer');  ?>


</body>
</html>
