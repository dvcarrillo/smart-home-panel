<!-- Home Panel
Web panel for administrating components in a smart home

By David Vargas Carrillo, Daniel Martín Martínez
Lappeenranta University of Technology, 2017 -->

<!-- room_model.php
Backend structure -->

<?php 
	class Room {
		function Room() {
			$this->mbd=Connector::DBConnection();
		}

		// Search for the given ID in the room table 
		public function getID($id) {
			$sentence = $this->mbd->prepare("SELECT id FROM room WHERE id=".$id);
			$sentence->execute();
			$row = $sentence->fetch();
			return $row[0];
		}

		public function getName($id) {
			$sentence = $this->mbd->prepare("SELECT name FROM room WHERE id=".$id);
			$sentence->execute();
			$row = $sentence->fetch();
			return $row[0];
		}

		// Get a list with all the IDs in room table
		public function getListID() {
			$sentence = "SELECT id FROM room";
			foreach ($this->mbd->query($sentence) as $row) {
				echo $row['id'];
				echo " ";
			}
		}

		public function getRoomDevices() {
			$sentence = "SELECT * FROM device where RoomID=" . $_GET['id'];
			foreach ($this->mbd->query($sentence) as $row) {
					echo 	
				"<div class='col-md-1 col-sm-6 col-xs-4'>
				<div class='bg-aqua'>
				<span class='info-box-icon back" . $row['type']; if(!$row['state']){echo " device-off";}; echo "'><p class='device-name'><a href=room_controller.php?id=". $_GET['id'] ."&seton=" . $row['id'] .  ">" .  $row['name'] . "</a></p><!-- <i class='fa fa-bookmark-o'></i> --> 
<<<<<<< HEAD
						<button type='button' class='small-box-footer-own' data-toggle='modal' data-target='#DevicePModal' 
					data-ip='" . $row['id']  ."'
					data-Comp='". $row['consumption'] ."'
					data-State='"; if($row['state'] == 1){echo "Device is ON";}else{echo "Device is OFF";} echo "'
					Data-room='"; if($row['RoomID'] == 2){ echo "Kitchen"; }else if($row['RoomID'] == 1){echo "Living Room";} echo "'




					 data-whatever='".$row['name'] . "'>Check Device</button></span>
=======
				<a href='#' class='small-box-footer-own'>Check Device</a></span>
>>>>>>> f07ca5209eb5da4f019547d071b157125b7c6f6f
				</div>
				</div>";

				}
		}

		public function switchDeviceROOM($id){
			$sentence = $this->mbd->prepare("SELECT state from device WHERE id=".$id);
			$sentence->execute();
			$row = $sentence->fetch();
			if($row[0] == 1){
				$sentence = $this->mbd->prepare("UPDATE device SET state=0 WHERE id=".$id);
				$sentence->execute();
			}else if($row[0] == 0){
				$sentence = $this->mbd->prepare("UPDATE device SET state=1 WHERE id=".$id);
				$sentence->execute();
			}		
		}




		public function getMenuList() {
			$sentence = "SELECT * FROM room";
			foreach ($this->mbd->query($sentence) as $row) {
				echo "<li><a href='content/room/room_controller.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
			}
		}

		//esto es una mierda, pero por ahora vale.
		public function getMenuListNotMain() {
			$sentence = "SELECT * FROM room";
			foreach ($this->mbd->query($sentence) as $row) {
				echo "<li><a href='../room/room_controller.php?id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
			}
		}

	}
?>