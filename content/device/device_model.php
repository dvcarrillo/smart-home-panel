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

		// Search for the given ID in the device table 
		public function getID($id) {
			$sentence = $this->mbd->prepare("SELECT id FROM device WHERE id=".$id);
			$sentence->execute();
			$row = $sentence->fetch();
			return $row[0];
		}

		// Get a list with all the IDs in device table
		public function getListID() {
			$sentence = "SELECT id FROM device";
			foreach ($this->mbd->query($sentence) as $row) {
				echo $row['id'];
				echo " ";
			}
		}

		// List all the devices' ID in the desired room
		public function getIDInRoom($roomID) {
			$sentence = "SELECT id FROM device WHERE RoomID=".$roomID;
			foreach ($this->mbd->query($sentence) as $row) {
				echo $row['id'];
				echo " ";
			}
		}

		public function printDevices() {
			$sentence = "SELECT * FROM device";
			foreach ($this->mbd->query($sentence) as $row) {
	echo 	
			"<div class='col-md-1 col-sm-6 col-xs-4'>
			<div class='bg-aqua'>
			<span class='info-box-icon back" . $row['type']; if(!$row['state']){echo " device-off";}; echo "'><p class='device-name'><a href='#'>" .  $row['name'] . "</a></p><!-- <i class='fa fa-bookmark-o'></i> --> 
			<a href='#' class='small-box-footer-own'>Check Device</a></span>
			</div>
			</div>";

			}
		}



	}
?>