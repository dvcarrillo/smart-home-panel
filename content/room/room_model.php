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
				<span class='info-box-icon back" . $row['type']; if(!$row['state']){echo " device-off";}; echo "'><p class='device-name'><a href='#'>" .  $row['name'] . "</a></p><!-- <i class='fa fa-bookmark-o'></i> --> 
				<a href='#' class='small-box-footer-own'>Check Device</a></span>
				</div>
				</div>";

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