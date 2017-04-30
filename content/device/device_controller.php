<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- device_controller.php
Backend controller -->

<?php

		require_once("device_model.php");
		require_once("../connector/connection.php");
		require_once("../menus/header.php");
		$deviceController = new Device();

if(isset($_GET['seton'])){
		$deviceController->switchDevice($_GET['seton']);
}	
		require_once("device_view.php");
		require_once("../menus/footer.php");
?>