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

		public function printDevices($elec_type) {
			if($elec_type == 4){
				$sentence = "SELECT * FROM device";
			}else{
				$sentence = "SELECT * FROM device WHERE type=" . $elec_type;
			}
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



		public function getDeviceMenuList() {
			$sentence = "SELECT * FROM device";
			foreach ($this->mbd->query($sentence) as $row) {
				echo "<li><a href='content/device/device_controller.php?type=" . $row['type'] . "'>";
				if($row['type'] == 1){
					echo "Power";
				}else if($row['type'] == 2){
					echo "Heating";
				}else if($row['type'] == 3){
					echo "Water";
				}
				echo  "</a></li>";
			}
			echo "<li><a href='content/device/device_controller.php?type=4'> All</a></li> ";
		}

		//esto es una mierda, pero por ahora vale.
		public function getDeviceMenuListNotMain() {
			$sentence = "SELECT * FROM device";
			foreach ($this->mbd->query($sentence) as $row) {
				echo "<li><a href='../device/device_controller.php?type=" . $row['type'] . "'>";
				if($row['type'] == 1){
					echo "Power";
				}else if($row['type'] == 2){
					echo "Heating";
				}else if($row['type'] == 3){
					echo "Water";
				}
				echo  "</a></li>";
			}
			echo "<li><a href='../device/device_controller.php?type=4'> All</a></li> ";
		}



	}
?>