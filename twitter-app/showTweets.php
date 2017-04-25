<?php 

	class Twitter
	{
		var $twitter;

		function Twitter($oauth,$oauth_secret,$consumer_Key,$consumer_secret) {
			
			$settings = array(
			'oauth_access_token' => $oauth,
			'oauth_access_token_secret' => $oauth_secret,
			'consumer_key' => $consumer_Key,
			'consumer_secret' => $consumer_secret
			);
			$this->twitter = new TwitterAPIExchange($settings);
		}

		function tweet($message){
			$url = 'https://api.twitter.com/1.1/statuses/update.json';
			$requestMethod = 'POST';
			$postfields = array(
			'status' => $message, 
			);
			echo $this->twitter->buildOauth($url, $requestMethod)->setPostfields($postfields)->performRequest(); 

		}

		function getTweets($user) {
  		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$user.'&count=100';        
        $requestMethod = 'GET';
        $json =  $this->twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        return $json;
		}

		function getArrayTweets($jsonraw){
			$rawdata = array();
			$json = json_decode($jsonraw);
			$num_items = count($json);
			for($i=0; $i<$num_items; $i++){
				$user = $json[$i];
				$fecha = $user->created_at;
				$url_imagen = $user->user->profile_image_url;
				$screen_name = $user->user->screen_name;
				$tweet = $user->text;

				$imagen = "<a href='https://twitter.com/".$screen_name."' target=_blank><img src=".$url_imagen."></img></a>";
				$name = "<a href='https://twitter.com/".$screen_name."' target=_blank>@".$screen_name."</a>";

				$rawdata[$i][0]=$fecha;
				$rawdata[$i]["FECHA"]=$fecha;
				$rawdata[$i][1]=$imagen;
				$rawdata[$i]["imagen"]=$imagen;
				$rawdata[$i][2]=$name;
				$rawdata[$i]["screen_name"]=$name;
				$rawdata[$i][3]=$tweet;
				$rawdata[$i]["tweet"]=$tweet;
			}
			return $rawdata;
		}

	    function displayTable($rawdata){

	        //DIBUJAMOS LA TABLA
	        echo '<table border=1>';
	        $columnas = count($rawdata[0])/2;
	        //echo $columnas;
	        $filas = count($rawdata);
	        //echo "<br>".$filas."<br>";
	        //Añadimos los titulos

	        for($i=1;$i<count($rawdata[0]);$i=$i+2){
	            next($rawdata[0]);
	            echo "<th><b>".key($rawdata[0])."</b></th>";
	            next($rawdata[0]);
	        }
	        for($i=0;$i<$filas;$i++){
	            echo "<tr>";
	            for($j=0;$j<$columnas;$j++){
	                echo "<td>".$rawdata[$i][$j]."</td>";

	            }
	            echo "</tr>";
	        }       
	        echo '</table>';
	    }

}
?>