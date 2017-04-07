<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- device_controller.php
Backend controller -->

<?php
		require_once("device_model.php");
		require_once("../connector/connection.php");
		
		$deviceController = new Device();
		$deviceController->getIDInRoom(2);
?>