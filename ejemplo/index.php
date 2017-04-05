<?php 
ob_start();
	session_start();
	require_once("./includes/head.php"); 
	include("./includes/popups.php");
	require_once("./conexion/conexion.php");
	require_once("./includes/menu.php");
	
	if(isset($_GET['keyword']) && $_GET['keyword'] != ""){
		echo "<div id='main-container'>";
			require_once("./panelAdmin/panel_controller.php");
		echo "</div>";
	}else if(!isset($_GET['secc'])){
		require_once("./Hotel/hotel_controller.php");
	}else{ 
		
		if(isset($_GET['secc']) && $_GET['secc'] == 'mireserva'){
			echo "<div id='main-container' style='width: 100%;'>";
		}else{
			echo "<div id='main-container'>";
		}
		if($_GET['secc'] == "promo"){
			require_once("./promociones/promoActividades_controller.php");
		}else if($_GET['secc'] == "actividades"){
			require_once("./promociones/promoActividades_controller.php");
		}else if($_GET['secc'] == "habs"){
			require_once("./Habitaciones/habitacion_controller.php");
		}else if($_GET['secc'] == "servicios"){
			include("./servicios/servicios.php");
		}else if($_GET['secc'] == "fotos"){
			require_once("./Galeria/galeria_controller.php");
		}else if($_GET['secc'] == "contacto"){
			include("./contacto/contacto.php");
		}else if($_GET['secc'] == "opiniones"){
			include("./proximamente/template.php");
		}else if($_GET['secc'] == "p1"){
			require_once("./Reservas/reservas_controller.php");
		}else if($_GET['secc'] == "mireserva"){
			require_once("./Reservas/reservas_controller.php");
		}else if($_GET['secc'] == "mireserva2"){
			require_once("./Reservas/reservas_controller.php");
		}
		echo "</div>";
	}
		if(isset($_GET['secc']) && $_GET['secc'] == 'mireserva'){
			echo "<div class='lateralmenu' style='width: 0%;'>";
			 echo "</div>";
		}else{
			echo "<div class='lateralmenu'>";
			include("./includes/barraLateral.php");
			 echo "</div>";
		}
	if(!isset($_GET['secc'])){
	include ("./includes/prefooter.php");
	};
	include("./includes/footer.php");
	ob_end_flush();

?>

