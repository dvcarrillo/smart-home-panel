<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- device_model.php
Backend structure -->

<?php
	class Device {
		function Device() {
			$this->mbd=Connector::DBConnection();
		}
	}

	
?>