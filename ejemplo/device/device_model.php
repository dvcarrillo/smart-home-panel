<?php 
	class Device {
	  
	   function Device() {
	      $this->mbd=Connector::DBConnection();
	   }

	    //Search if there is the given ID in the Database
	    public function getID($id){
			$sentence =$this->mbd->prepare("SELECT id from `device` WHERE id=".$id);
			$sentence->execute();
			$row = $sentence->fetch();
			return $row[0];
		}

		function getID_List(){
			$sentence ="SELECT id from `device`";
			foreach($this->mbd->query($sentence) as $row){
				echo $row['id'];
			}
	  	}



	

	  function printHabitacionesLeft($id){
			   		echo '<div class="col s12 m12 l12 big">
							<div class="row">
						   		<div class="col s6 m6 l6">
									<img class="img-promo" src="'.$this->getImagen($id).'">
								</div>
								<div class="col s6 m6 l6">
									<div class="text-info-index-row"><h3>'.$this->getNombre($id).'</h3>
									<p class="promo-text-info-index-row">'.$this->getDescripcionESP($id).'</p>
									<button class="btn waves-effect waves-light" type="submit" name="action">
									<a href="index.php?secc=habs&tipo='.$id.'" style="color:white">Ir a habitacion </a>
									<i class="material-icons right">send</i>
									</button>
	        
								</div>
								<div style="clear:both;"></div>
							</div>
						</div>
					</div>';

					echo'		<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="'.$this->getImagen($id).'">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">'.$this->getNombre($id).'<i class="material-icons right dots-card">more_vert</i></span>
						</div>
						<div class="card-action">
							<a style="color: #26a69a; font-size: 1.3em">10€</a>
							<a href="index.php?secc=habs&tipo='.$id.'" class="right" style="font-size:1.2em;">Ir a habitacion</a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">'.$this->getNombre($id).'<i class="material-icons right">close</i></span>
							<p>'.$this->getDescripcionESP($id).'</p>
						</div>
					</div>';
		   }

	    function printHabitacionesRight($id){
		   		echo '<div class="col s12 m12 l12 big">
						<div class="row white">
							<div class="col s6 l6">
								<div class="text-info-index-row"><h3>'.$this->getNombre($id).'</h3>
									<p class="promo-text-info-index-row ">'.$this->getDescripcionESP($id).'</p>
									<button class="btn waves-effect waves-light" type="submit" name="action"><a href="index.php?secc=habs&tipo='.$id.'" style="color:white">Ir a habitacion </a>
									<i class="material-icons right">send</i>
									</button>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="col s6 l6">
								<img class="img-promo" align="right" src="'.$this->getImagen($id).'">
							</div>
						</div>
					</div>';

		echo'		<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="'.$this->getImagen($id).'">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">'.$this->getNombre($id).'<i class="material-icons right dots-card">more_vert</i></span>
						</div>
						<div class="card-action">
							<a style="color: #26a69a; font-size: 1.3em">10€</a>
							<a href="index.php?secc=habs&tipo='.$id.'" class="right" style="font-size:1.2em;">Ir a habitacion</a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">'.$this->getNombre($id).'<i class="material-icons right">close</i></span>
							<p>'.$this->getDescripcionESP($id).'</p>
						</div>
					</div>';

		   }

	  function listaHabitaciones(){
			$sentencia ="SELECT id from `habitacion`";
			$totalHabs=0;

			foreach($this->mbd->query($sentencia) as $row){
				$hab = new Habitacion();
				if($totalHabs%2==0){
					$hab->printHabitacionesLeft($row['id']);
				}else{
					$hab->printHabitacionesRight($row['id']);
				}
				$totalHabs++;
			}
	  }


	public function getCarrousel($id){
		$sentencia =$this->mbd->prepare("SELECT imagen from `habitacion` WHERE id=".$id);
		$sentencia->execute();
		$row = $sentencia->fetch();
		$foto = explode(";", $row[0]);
		return $foto;
	}





	}
?>