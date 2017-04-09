

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Devices in Kitchen
        <small><?php $hoy = date("F j, Y  g:i a"); echo $hoy; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
        <li class="active">Devices in Kitchen</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
     
     <?php $deviceController->printDevices(); ?>
    
    </div>
    <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

