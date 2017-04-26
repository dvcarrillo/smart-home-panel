
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
             <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="30" data-width="120" data-height="120" data-fgColor="#00c0ef">

                  <div class="knob-label">data-angleArc="250"</div>


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