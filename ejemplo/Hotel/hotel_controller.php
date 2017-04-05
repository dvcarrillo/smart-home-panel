<?php
	require_once("./Hotel/hotel_model.php");

	$hotel = new hotel_model();
	$nombre = $hotel->getNombre();
	if(isset($_GET['cambiaD']) && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1 && !empty($_POST['cambiaD'])){ 
		$hotel->setDescripcion($_POST['cambiaD']);
		header("Location:./index.php");
	}
	$descripcion = $hotel->getDescripcion();
	$imagen = $hotel->getImagen();

	require_once("./Hotel/hotel_view.php");
?>