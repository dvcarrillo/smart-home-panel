					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner"><h3>Water</h3><p>3 devices running</p></div>
							<div class="icon"><i class="glyphicon glyphicon-tint" style='font-size:65px;'></i></div>
							<a href="#" class="small-box-footer">Check Devices  </a>
						</div>
					</div> <!-- end 2 column -->

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow color-palette">
							<div class="inner"><h3>Power</h3><p>3 devices running</p></div>
							<div class="icon"><i class="glyphicon glyphicon-flash" style='font-size:65px;'></i></div>
							<a href="#" class="small-box-footer">Check Devices  </a>
						</div>
					</div> <!-- end 3 column -->

					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red disabled color-palette">
							<div class="inner"><h3>Heating</h3><p>3 devices running</p></div>
							<div class="icon"><i class="glyphicon glyphicon-fire" style='font-size:65px;'></i></div>
							<a href="#" class="small-box-footer">Check Devices  </a>
						</div>
					</div> <!-- end 4 column -->

					<div class="col-lg-3 col-xs-6">
						<!-- DIRECT CHAT WARNING -->
					      <div class="box box-warning direct-chat direct-chat-warning">
					        <form method="post">
					          <div class="box-header with-border">
					            <h3 class="box-title">Notes</h3>
					            <div class="box-tools pull-right">
					              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
					              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					            </div>
					          </div>
					          <!-- /.box-header -->
					          <div class="box-body">
					            <!-- Conversations are loaded here -->
					            <div class="direct-chat-messages">
					              <!-- Message. Default to the left -->
					              <div class="direct-chat-msg">
					                <div class="direct-chat-info clearfix">
					                  <span class="direct-chat-name pull-left">Daniel Martin</span>
					                  <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
					                </div>
					              <!-- /.direct-chat-info -->
					              <!-- /.direct-chat-text -->
					              </div>
					              <!-- /.direct-chat-msg -->
					              <!-- Message to the right -->
					              <div class="direct-chat-msg right">
					              <!-- /.direct-chat-info -->
					                <div class="direct-chat-text">
					                  <div id="results">
					                    <span  id="final_span" class="final"></span>
					                    <input type="hidden" id='notaI' name="nota" value='test' >
					                    <span id="interim_span" class="interim"></span>
					                  </div>
					                </div>
					                <!-- /.direct-chat-text -->
					              </div>
					              <!-- /.direct-chat-msg -->
					            </div>
					            <!--/.direct-chat-messages-->
					          </div>
					          <!-- /.box-body -->
					          <div class="box-footer">
					            <div class="input-group">
					              <span class="input-group-btn">
					                <button type="submit" style='float:right; margin-left:10px;' class="btn btn-warning btn-flat">Send</button>
					                <div type="submit" style='float:right;' class="btn btn-warning btn-flat"><a href="#" id="start_button" onclick="startDictation(event)"><i style='color: white;' class="fa fa-microphone" aria-hidden="true"></i></a></div> 
					              </span>
					            </div>

					          </div>
					          <!-- /.box-footer-->
					          </div>
					          <!--/.direct-chat -->
					        </form> 
					      </div>	

					</div> <!-- end 5 column -->					
					<div class="col-lg-3 col-xs-6">
						<div class="weather-wrapper">
							<div class="weather-card madrid">
								<div class="weather-icon sun"></div>
								<h1 id="temp"></h1>
								<p id="city"></p>
							</div>
						</div>			
					</div> <!-- end 6 column -->								
