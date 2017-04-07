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
	}
?>