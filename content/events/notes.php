<?php
	class Note {
		function Note() {
			$this->mbd=Connector::DBConnection();
		}

		// DATE FORMAT EXAMPLE 2017-04-28 00:00:00
		function CreateNote($text) {
			$nows = new DateTime();
			$now = date_format($nows, 'Y-m-d H:i:s');
			$sentence =  $this->mbd->prepare("INSERT INTO `notas` (`id`, `text`, `date`) VALUES (NULL, '$text', '". $now ."')");
			$sentence->execute();

		}

		public function showNotes() {
			$sentence = "SELECT * FROM notas";
			foreach ($this->mbd->query($sentence) as $row) {	
				echo "<li><a href='#''><i class='fa fa-user text-light-blue'></i> " . $row['text'] . "</a></li>";
			}
		}

		public function getTotalNotes() {
			$sentence =  $this->mbd->prepare("SELECT * FROM notas");
			$sentence->execute();
			$cuenta = $sentence->rowCount();
			echo $cuenta;
		}
	}
 ?>