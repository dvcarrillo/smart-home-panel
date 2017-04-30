
<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- Backend controller -->

<?php
require_once("content/connector/connection.php");
require_once("content/room/room_model.php");
  $roomLister = new Room();

  $home = true;
  require_once("content/menus/header.php");
  $widgetManager = new Widget();
 ?>



<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>Home<small><?php $hoy = date("F j, Y  g:i a", strtotime('+1 hours')); echo $hoy; ?></small></h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i> DashBoard</a></li>
					<li class="active">Home</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div clas='Container'>
					<div class="col-lg-9 col-xs-12">
						<div class="row">

							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="small-box bg-aqua">
									<div class="inner"><h3>Water</h3><p><?php $DevicesLister->getNumberOfDevicesRunning(1); ?> devices running</p></div>
									<div class="icon"><i class="glyphicon glyphicon-tint" style='font-size:65px;'></i></div>
									<a href="content/device/device_controller.php?type=1" class="small-box-footer">Check Devices  </a>
								</div>
							</div> <!-- end 2 column -->

							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="small-box bg-yellow color-palette">
									<div class="inner"><h3>Power</h3><p><?php $DevicesLister->getNumberOfDevicesRunning(2); ?> devices running</p></div>
									<div class="icon"><i class="glyphicon glyphicon-flash" style='font-size:65px;'></i></div>
									<a href="content/device/device_controller.php?type=2" class="small-box-footer">Check Devices  </a>
								</div>
							</div> <!-- end 3 column -->
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="small-box bg-red disabled color-palette">
									<div class="inner"><h3>Heating</h3><p><?php $DevicesLister->getNumberOfDevicesRunning(3); ?> devices running</p></div>
									<div class="icon"><i class="glyphicon glyphicon-fire" style='font-size:65px;'></i></div>
									<a href="content/device/device_controller.php?type=3" class="small-box-footer">Check Devices  </a>
								</div>
							</div> <!-- end 4 column -->

							<?php 	$widgetManager->printWidget("Water");
									$widgetManager->printWidget("Power");
									$widgetManager->printWidget("Heating");
							?>
						</div>	<!-- end row 1 -->
					</div>
					<div class="col-lg-3 col-md-3 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="box box-warning direct-chat direct-chat-warning">
									<form method="post">
										<div class="box-header with-border">
								            <h3 class="box-title">Notes</h3>
								            <div class="box-tools pull-right">
								              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
								              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								            </div>
							          	</div><!-- /.box-header -->	
							          	<div class='box-body'>
						            		<div class="direct-chat-messages">
												<div class="direct-chat-msg">
													<div class="direct-chat-info clearfix">
														<span class="direct-chat-name pull-left">Daniel Martin</span>
														<span class="direct-chat-timestamp pull-right"><?php $hoy = date("j F   g:i a", strtotime('+1 hours')); echo $hoy; ?>
														</span>
													</div>
												</div><!-- /.direct-chat-messages -->
												<div class="direct-chat-msg right">
													<!-- /.direct-chat-info -->
													<div class="direct-chat-text">
														<div id="results">
															<span  id="final_span" class="final"></span>
															<input type="hidden" id='notaI' name="nota" value='test' >
															<span id="interim_span" class="interim"></span>
														</div>
													</div>
												</div><!-- /.direct-chat-msg -->										
						            		</div><!--/.direct-chat-messages-->
							          	</div><!-- /.box-body -->
			 							<div class="box-footer">
								            <div class="input-group">
								              <span class="input-group-btn">
								                <button type="submit" style='float:right; margin-left:10px;' class="btn btn-warning btn-flat">Send</button>
								                <div type="submit" style='float:right;' class="btn btn-warning btn-flat"><a href="#" id="start_button" onclick="startDictation(event)"><i style='color: white;' class="fa fa-microphone" aria-hidden="true"></i></a></div> 
								              </span>
								            </div>
								         </div><!--box-footer -->				          	
									</form>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-xs-12">
								<div class="weather-wrapper">
									<div class="weather-card madrid">
										<div class="weather-icon sun"></div>
										<h1 id="temp"></h1>
										<p id="city"></p>
									</div>
								</div>			
							</div> <!-- end 6 column -->

							<div class="col-lg-9 col-md-9 col-xs-12" style='padding-top: 15px;'>
								<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3Aplay2%3Aplaylist%3A5ROk6ELkqZ8kdZ878WcvIa&theme=white"  frameborder="0" height="100" width="243" allowtransparency="true"></iframe>
							</div> <!-- end 6 column -->			

						</div>	<!-- end row 2 -->
					</div>
			
					
				</div>

				<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
			</section>
		<!-- /.content -->
	</div>
<!-- /.content-wrapper -->
 <?php
  require_once("content/menus/footer.php");
?>