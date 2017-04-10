

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
       <?php
        if($_GET['type'] == 1){$type = "Power"; }else if($_GET['type'] == 2){$type = "Heating";}else if($_GET['type'] == 3){$type = "Water";} else if($_GET['type'] == 4){ $type = "All";};
        echo $type . " Devices";
        ?>
        <small><?php $hoy = date("F j, Y  g:i a"); echo $hoy; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-sliders"></i> Devices</a></li>
        <li class="active"> <?php  echo $type . " Devices"; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
     
     <?php $deviceController->printDevices($_GET['type']); ?>
    
    </div>
    <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

