<?php
	class hotel_model{
		private $mbd;

		public function __construct(){
			$this->mbd=Conexion::conexionBD();
		}

		public function getDescripcion(){
			$sentencia =$this->mbd->prepare("SELECT descripcionESP from `hotel`");
			$sentencia->execute();
			$row = $sentencia->fetch();
			return $row[0];
		}

		public function getNombre(){
			$sentencia =$this->mbd->prepare("SELECT nombre from `hotel`");
			$sentencia->execute();
			$row = $sentencia->fetch();
			return $row[0];
		}

		public function getImagen(){
			$sentencia =$this->mbd->prepare("SELECT imagen from `hotel`");
			$sentencia->execute();
			$row = $sentencia->fetch();
			return $row[0];
		}

		public function getHabitaciones(){
	      $habitaciones = "SELECT id,imagen from habitacion";
	      
	      foreach($mbd->query($habitaciones) as $row){
	      	  $foto = explode(";", $row['imagen']);
	          echo "<div class='showHabs'><li><a href='index.php?secc=habs&tipo=".$row['id']."'><img id='imagenH' src=".$foto[0]."></a></li></div>";
	      }
      
  		}

  		public function setDescripcion($newDesc){
	  		try{
		      $sentencia =$this->mbd->prepare("UPDATE `hotel` SET `descripcionESP`= '$newDesc'");
	      	  $sentencia->execute();
	      	}catch(PDOException $e){
	    		echo $e->getMessage();
	    	}
  		}

	}
?>