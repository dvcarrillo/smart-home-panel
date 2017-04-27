<?php
	class Widget {
		function Widget() {
				$this->mbd=Connector::DBConnection();
		}


		public function printWidget($type){

			$sentence = $this->mbd->prepare("SELECT * FROM consumptiont WHERE Name='".$type ."'");
			$switch = 0;
			$sentence->execute();
			$row = $sentence->fetch();

			$heat = $this->mbd->prepare("SELECT * FROM device WHERE type=3");
			$heat->execute();
			$heatrow = $heat->fetch();
			$total;
			$sh = "";
 			$hoy = date("g:i A", strtotime('+1 hours'));
 			if($type == "Water"){$sh = "L";}else if($type == "Power"){$sh = "kW";}else if($type == "Heating"){$switch=1;$sh = "°C";};

			echo '
				<div class="col-lg-4 col-xs-12">
					<div class="container-graph">
					    <div class="widget-graph">

					      <div class="section section-graph s-'. $type . '">
					        <div class="graph-info">
					          <i class="graph-arrow"></i>
					          '; 
					          if($switch==1){
					          	     echo' <span class="graph-info-big">'. $heatrow[6]  . $sh . '</span><br><br>';

					          }else{
					          	     echo' <span class="graph-info-big">'. round($row[3],4)  . $sh . '</span><br><br>';
					          }
					    
					          echo '
					          <span class="graph-info-small"></span>
					        </div>
					        <div id="graph"></div>
					      </div>

					      <div class="section-graph-g section-info">
    						<span class="info-time">Today ' .$hoy.  '</span>
					        <h3 class="widget-graph-h3 info-title">'. $type .' Information</h3>';
					       if($switch==1){
					          	    echo ' <div class="info-block" style="width:100%;">
							          <dl class="widget-dl">
							          <dt>24°C</dt>
							          <dd>Recommended Temperature</dd>
							          </dl>
							        </div>';

					          }else{
					          	    
					          

					          echo '
					    
					        <div class="info-block">
					          <dl class="widget-dl">
					          <dt>'. round($row[4],2)  . $sh .'</dt>
					          <dd>Total Today</dd>
					          </dl>
					        </div>
					        <div class="info-block last">
					          <dl class="widget-dl">
					          <dt>'. round($row[6],2)  . $sh .'</dt>
					          <dd>Total Yesterday</dd>
					          </dl>
					        </div>  
					        <div class="yearly-change">
					          <h4 class="widget-graph-h4">Daily Saving</h4>
					          <span class=' ; if($row[4] > $row[6]){echo "b-red ";}else{echo "b-green";}; echo  '><em>';
					          if($row[4] > $row[6]){
					           $total = (round(($row[4]*100 /$row[6]),2))-100; echo "- ";}
					           else{
					           $total = 100 -(round($row[4]*100/$row[6],2));

					          	echo "+ ";};
					          	 echo '</em>' . $total . ' %</span>
					        </div>';
					    };echo '

					      </div>
					    </div>
					</div>
				</div> 
				 ';
	}


	}
 ?>