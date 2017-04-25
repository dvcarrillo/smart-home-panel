<?php
	class Event {
		function Event() {
			$this->mbd=Connector::DBConnection();
		}

		// DATE FORMAT EXAMPLE 2017-04-28 00:00:00
		function CreateStatusEvent($id, $status, $date) {

			$date_split = explode("T", $date);
			$fdate = $date_split[0] . " " .  $date_split[1] . ":00.000000";
			$name = $id . "set" . $status . rand(0, 2000);


			$sentence =  $this->mbd->prepare( "CREATE EVENT ". $name . " ON SCHEDULE AT '$fdate' ON COMPLETION NOT PRESERVE ENABLE DO update device SET state=" . $status ." where id=". $id);
			$sentence->execute();

		}
	}
 ?>