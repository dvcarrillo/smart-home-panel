
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
<div class="col-md-3">
 

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


				<!-- Your Page Content Here -->
				</div>
				

			</section>
		<!-- /.content -->
	</div>
<!-- /.content-wrapper -->
 <?php
  require_once("content/menus/footer.php");
?>


<script type="text/javascript">
var final_transcript = '';
var recognizing = false;

if ('webkitSpeechRecognition' in window) {

  var recognition = new webkitSpeechRecognition();

  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function() {
    recognizing = true;
  };

  recognition.onerror = function(event) {
    console.log(event.error);
  };

  recognition.onend = function() {
    recognizing = false;
    document.getElementById("notaI").value = document.getElementById("final_span").innerHTML;


  };

  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    
  };
}

var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

function capitalize(s) {

  return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
}

function startDictation(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = 'es-ES';
  recognition.start();
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
}
</script>