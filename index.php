
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
						<!-- 
						<div class="weather-wrapper">
						<div class="weather-card madrid">
						<div class="weather-icon sun"></div>
						<h1 id="temp"></h1>
						<p id="city"></p>
						</div>
						</div>	
						-->

				<!-- Your Page Content Here -->
				</div>
				

			</section>
		<!-- /.content -->
	</div>
<!-- /.content-wrapper -->
 <?php
  require_once("content/menus/footer.php");
?>