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

		// Get a list with all the IDs in room table
		public function getListID() {
			$sentence = "SELECT id FROM room";
			foreach ($this->mbd->query($sentence) as $row) {
				echo $row['id'];
				echo " ";
			}
		}

		public function getMenuList() {
			$sentence = "SELECT * FROM room";
			foreach ($this->mbd->query($sentence) as $row) {
				echo "<li><a href='#''>" . $row['name'] . "</a></li>";
			}
		}
	}
?>