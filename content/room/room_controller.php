<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- device_controller.php
Backend controller -->

<?php
		require_once("../menus/header.php");
		require_once("../connector/connection.php");
		require_once("room_model.php");
		$roomController = new Room();
		require_once("room_view.php");
		require_once("../menus/footer.php");
?>
