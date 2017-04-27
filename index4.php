
<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- device_controller.php
Backend controller -->

<?php
require_once("content/connector/connection.php");
require_once("content/room/room_model.php");
  $roomLister = new Room();

  $home = true;
  require_once("content/menus/header.php");

 ?>



<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>Home<small><?php $hoy = date("F j, Y  g:i a"); echo $hoy; ?></small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i> DashBoard</a></li>
					<li class="active">Home</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">

          <div class="col-md-8">
              <div class="box box-success">
                  <div class="box-header with-border">
                      <h3 class="box-title">Visitors Report</h3>
                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
     
                  <!-- /.row -->
                  </div>
              <!-- /.box-body -->
              </div>
          </div>

				<!-- Your Page Content Here -->
				</div>
				

			</section>
		<!-- /.content -->
	</div>
<!-- /.content-wrapper -->
 <?php
  require_once("content/menus/footer.php");
?>
