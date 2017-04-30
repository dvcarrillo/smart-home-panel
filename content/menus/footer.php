<?php
if(isset($home)){$var = "'";}else{$var="'" . "../../";}
?>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     SmartHomePanel
    </div>
    <!-- Default to the left -->
    Daniel Martin Martinez, David Vargas Carrillo
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- modal form -->
<div class="modal fade " id="DevicePModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog box-bor" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
        <form method='POST'>
        <div class='row'>
          <div class="col-lg-4 col-xs-4">   

            <div class="form-group">
                <label>IP Address:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" id='' data-inputmask="'alias': 'ip'" data-mask="" disabled></input>
                </div>
                  <!-- /.input group -->
            </div> 
          </div>
            <div class="col-lg-4 col-xs-4">   

            <div class="form-group">
                <label>Current Compsumption:</label>
                <div class="input-group">
                  <div class="input-group-addon">
               <i class="fa fa-signal" aria-hidden="true"></i>
                  </div>
                  <input type="text" class="form-control" id='modal-Comp' data-inputmask="'alias': 'ip'" data-mask="" disabled>
                </div>
                  <!-- /.input group -->
            </div> 
          </div>
           <div class="col-lg-4 col-xs-4">   

            <div class="form-group">
                <label>State:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-power-off" aria-hidden="true"></i>
                  </div>
                  <input type="text" value='Device is ON' id='modal-State' class="form-control" data-inputmask="'alias': 'ip'" data-mask="" disabled>
                </div>
                  <!-- /.input group -->
            </div> 
          </div>

        </div>
          <div class="row">
            <div class="col-lg-6 col-xs-6">   
                <div class="form-group">
                      <label>Timer Set:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="datetime-local" name='timeSet' id='timeSet' class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                      </div>
                      <!-- /.input group -->
                </div>
              

              <div class="radio">
                    <label class='radioT'><input  type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="">Turn ON</label>
                    <label  class='radioT'><input type="radio" name="optionsRadios" id="optionsRadios1" value="0" checked="">Turn OFF</label>
              </div>
              <input  type="hidden" name='idDevice' class="form-control" id='modal-ip' ></input>

            </div>

            <div class="col-lg-6 col-xs-6">   
                <div class="form-group">
                      <label>Room:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                         <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <input type="text" id='modal-room' class="form-control" value='Kitchen' disabled>
                      </div>
                      <!-- /.input group -->
                </div>
            </div>


          </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Set Timer</button>
      </div>
    </div>
  </div>
          </form>
</div>
<!-- end modal form -->





<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=<?php echo $var ?>assets/plugins/jQuery/jquery-2.2.3.min.js<?php echo "'";?>></script>
<!-- Bootstrap 3.3.6 -->
<script src=<?php echo $var ?>assets/bootstrap/js/bootstrap.min.js<?php echo "'";?>></script>
<!-- AdminLTE App -->
<script src=<?php echo $var ?>assets/dist/js/app.min.js<?php echo "'";?>></script>
<script src=<?php echo $var ?>js/weather.js<?php echo "'";?>></script>

<script src=<?php echo $var ?>js/widget-chart-js.js<?php echo "'";?>></script>
<script src='http://code.highcharts.com/highcharts.js'></script>



<!-- script for modals -->
<script type="text/javascript">
  $('#DevicePModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var IP = button.data('ip') // Extract info from data-* attributes
    var State = button.data('state') // Extract info from data-* 
    var Comp = button.data('comp') // Extract info from data-* attributes
    var room = button.data('room') // Extract info from data-* attributes

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(recipient +" Properties")
    document.getElementById("modal-ip").value = IP;
    document.getElementById("modal-Comp").value = Comp;
    document.getElementById("modal-State").value = State;
    document.getElementById("modal-room").value = room;

   // var today = moment().format('YYYY-MM-DD');
 // $("#timeSet").val(today);

  //  modal.find('.modal-body input').val(recipient)
  })


</script>


<!-- end script for modals-->



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

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




</body>
</html>
