
  <!-- banner principal -->
  <div id="index-banner" class="parallax-container imgPrincipal">
    <div class="section no-pad-bot">
    </div>
    <div class="parallax"><img class='filtro-slider carro-principal' src="./images/carrousel_wall.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <script>
    function validateForm() {
      var ini = document.forms["formu"]["fechaInicio"].value;
      var fin = document.forms["formu"]["fechaFin"].value;
      if (ini == null || ini == "" || fin == null || fin == "") {
          alert("Falta alguna fecha por poner");
          return false;
      }
  }


  </script>

  <div class="container">
    <div class="section">
      <div class="row" id='reservaRow'>
          <form action="?secc=mireserva" name="formu" onsubmit="return validateForm()" method="POST">
              <div class="input-field col s12 l2">
                <i class="material-icons prefix">today</i>
                <input id="FechaEntrada" type="date" name="fechaInicio" class="datepicker c-align" required>
                <label for="FechaEntrada">Fecha entrada</label>
              </div>
              <div class="input-field col s12 l2">
                <i class="material-icons prefix">today</i>
                <input id="FechaSalida" type="date" name="fechaFin" class="datepicker c-align" required>
                <label for="FechaSalida">Fecha salida</label>
              </div>
              <div class="input-field col s12 l2">
                <i class="material-icons prefix">supervisor_account</i>
                <input id="npersonas" type="number" value=1 min=1 name="nPersonas" class="c-align" required>
                <label for="npersonas">Nº Personas</label>
              </div>
              <div class="input-field col s12 l2">
                <i class="material-icons prefix">supervisor_account</i>
                <input id="nninios" type="number" value=0 min=0 name="nninios" class="c-align" required>
                <label for="nninios">Nº Niños</label>
              </div>
              <div id='reservarButton' class="input-field col s12 l3 center">
                <button class="btn waves-effect waves-light" type="submit" name="action">Reservar
                  <i class="material-icons right">send</i>
                </button>
              </div>
          </form>
      </div>
    </div>
  </div>
<!-- FIN banner principal-->
<div id='main-container'>
<!-- CONTENIDO PRINCIPAL-->
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4><?php echo $nombre ?></h4>
          <p style='text-align: justify;' class="left-align light" id="descr" onmouseout="document.getElementById('editIconT').style.display=`none`;" onmouseover="document.getElementById('editIconT').style.display=`inline`;"><?php echo $descripcion; 

            if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == '1') {
                echo '<a class="modal-trigger" href="#modal1" id="aEditTitle" style="text-decoration:none;font-size:11px;"><i id=editIconT style="display:none" class="material-icons">build</i></a>';
            }

          ?></p>
        </div>
      </div>

    </div>
  </div>


    <div class='row' id='Habitaciones'>

       <div class="col s12 l10 offset-l1 showHabs">
         <div class='showHabs' > <a href="index.php?secc=habs&tipo=1" ><img id='imagenH' src="./images/habitacion_twin2.jpg"></a></div>
         <div class='showHabs' >  <a href="index.php?secc=habs&tipo=2"><img id='imagenH' src="./images/habitacion_twin.jpg"></a></div>
         <div class='showHabs' >  <a href="index.php?secc=habs&tipo=3"><img  id='imagenH' src="./images/habitacion_suite.jpg"></a></div>
         <?php //$hotel->getHabitaciones();?>
        </div>
    </div>

    <div class='container'>
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Equipamiento</h4>
          <p style=' text-align: justify;' class="left-align light">
              <div class='row'>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>General</h4>
                    <ul class="facility-list">   
                      <li class="facility">Habitaciones no fumadores</li>
                      <li class="facility">Aire Acondicionado</li> 
                      <li class="facility">Adaptado personas de movilidad reducida</li> 
                      <li class="facility">Prohibido fumar en todo el establecimiento</li> 
                      <li class="facility">Ascensor</li> 
                      <li class="facility">Calefacción</li> 
                    </ul>
                </div>
                 <div class='col s12 l3'>
                    <h4 class='info-equip'> Comida y Bebida </h4>
                    <ul class="facility-list">   
                      <li class="facility">Bar</li>
                      <li class="facility">Servicio de habitaciones</li> 
                      <li class="facility">Restaurante (a la carta)</li>
                      <li class="facility">Desayuno en la habitación</li>
                      <li class="facility">Snack-bar</li>
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>Servicios de recepción</h4>
                    <ul class="facility-list">   
                      <li class="facility">Recepción 24 horas</li>
                      <li class="facility">Servicio de conserjeria</li> 
                      <li class="facility">Información turistica</li> 
                      <li class="facility">Venta de entradas</li> 
                      <li class="facility">GuardaEquipaje</li> 
                      <li class="facility">Caja fuerta</li> 
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'> Internet </h4>
                    <ul class="facility-list">   
                      <li class="facility">Conexión WiFi gratuita</li>
                      <li class="facility">WiFi en todo el alojamiento</li> 
                      <li class="facility">Internet</li>
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>Familiar</h4>
                    <ul class="facility-list">   
                      <li class="facility">Habitaciones Familiares</li>
                      <li class="facility">Niñera / Servicios infantiles</li> 
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>Esqui</h4>
                    <ul class="facility-list">   
                      <li class="facility">Esqui</li>
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>Spa y bienestar</h4>
                    <ul class="facility-list">   
                      <li class="facility">Masajes</li>
                    </ul>
                </div>
                <div class='col s12 l3'>
                    <h4 class='info-equip'>Servicio de limpieza</h4>
                    <ul class="facility-list">   
                      <li class="facility">Servicio diario de camarera de pisos</li>
                      <li class="facility">Servicio de lavanderia</li>
                    </ul>
                </div>
              </div>
          </p>
        </div>
      </div>
    </div>
</div>

<div id="modal1" class="modal">
  <form action="index.php?cambiaD" method="POST">
    <div class="modal-content">
      <h4>Cambiar Descripcion</h4>
       <div class="row">
       <div class="input-field col s12">
       <?php echo ' <input id="datosD" class="materialize-textarea" value="'.$descripcion.'" type="text" name="cambiaD" class="validate" rows="4" cols ="50">';?>
          <label for="datosD"></label>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn waves-effect waves-light" type="submit" name="action">Cambiar</button>
    </div>
  </form>
</div>

<?php 
  if(isset($_GET['datosErroneos'])){
    alertwarning("Datos incorrectos.");
  }
  if(isset($_GET['fechaErroneaEMS'])){
    alerterror("Las fechas son erroneas");
  }
   if(isset($_GET['noreg'])){
    alerterror("Se necesita logueo para reservar");
  }

  if(isset($_GET['reserva']) && $_GET['reserva'] == true){
    alertsucess("Se ha reservado correctamente.");
  }
?>
<!-- fin contenido principal -->
