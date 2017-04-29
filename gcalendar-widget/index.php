<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/gcalendarwidget.css">
	  <meta charset="UTF-8">
  <title>Events Listing Card</title>
  <script src="https://use.fontawesome.com/2aa56eb85a.js"></script>
  
</head>
<body>
<?php
	session_start();

	// print_r($_SESSION);
	if(isset($_GET["logout"])){
		session_destroy();
 	}

	$redirect_uri ='http://localhost/home-panel/gcalendar-widget/index.php';
	require_once 'google-api-php-client-2.1.3/vendor/autoload.php';
	$client = new Google_Client();

	// Get your credentials from the console
	$client->setClientId('546186832734-u9f6qd2f0co0sno1vfceltfcp108vq7q.apps.googleusercontent.com');
	$client->setClientSecret('rxxhLW_fbciQ_Zbs7vlCACPV');
	$client->setRedirectUri($redirect_uri);
	$client->addScope('profile');

	$client->addScope(Google_Service_Calendar::CALENDAR);

	print_r($client->getAccessToken());

	$authUrl = $client->createAuthUrl();
	if (isset($_GET['code'])) {
		$client->authenticate($_GET['code']);
		$_SESSION['access_token'] = $client->getAccessToken();
		header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
	}

	if (!$client->getAccessToken() && !isset($_SESSION['access_token'])) {
		$authUrl = $client->createAuthUrl();
		print "<a class='login' href='$authUrl'>Connect</a>";
	}      

	if (isset($_SESSION['access_token'])) {
		print "<a class='logout' href='".$_SERVER['PHP_SELF']."?logout=1'>Exit</a><br>";
		
		$client->setAccessToken($_SESSION['access_token']);
		$service = new Google_Service_Calendar($client);
		$results = $service->events->listEvents('primary', array());

		if (count($results->getItems()) == 0) {
			print "<h3>No events</h3>";
		} else {
			print "<h3>Next events</h3>";
			echo "<table border=1>";
			
			foreach ($results->getItems() as $event) {
				$start = $event->start->dateTime;
				if (empty($start)) {
					$start = $event->start->date;
					$start2 = date("j F g:i a",$start);

				}
				$start3 = date("j ",$event->start->date);

			}

			echo '<div class=""><div class="masonry-grid">
					<div class="event-card card-calendar">
				    <p class="card-tag"><i class="fa fa-calendar" aria-hidden="true"></i> Next Event</p>
						<div class="calendar-item masonry-item">
					    <div class="event-date">
						      <div class="date-only">';

				echo '<div class="gcmonth">'.$start3.'</div>';
				echo '<div class="gcday">'.$start3.'</div>';
				echo '<div class="clearbox"></div>
				</div>
	      </div>
	    <div class="event-info">
		    <a class="event-title">';
		    	echo '<h3>'.$event->getSummary().'<h3>';
		    	echo '</a>
        <p class="event-details">
          <span class="gctime"><i class="fa fa-clock-o" aria-hidden="true">';

          		echo '</i> '.$start2.'</span>';

          		echo '</p>
		    <div class="clearbox"></div>
	    </div>
    </div>
    
    <p class="more-concerts"></p>
  </div>
</div>';
		}
	}
?>
</body>
</html>