<?php
		require_once("device_model.php");
		require_once("../connector/connection.php");
		
		$deviceController = new Device();
		$deviceController->getID_List();
?>