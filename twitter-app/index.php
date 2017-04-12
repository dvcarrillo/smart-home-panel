<?php
	ini_set('display_errors', 1);
	require_once('TwitterAPIExchange.php');
	require_once('showTweets.php');

	$twit = new Twitter("234523159-Bljl1XxXYtPwP1bJTAvukAyKZKYZhyawIP9JKIvo","CmLW2YDkLFg7KRh3As5Rry9f54fa04tiXurmyayryYWBn","8zCdDD5KwEENqk7t1lQ7Fgx89","CkMDb1Ucaa3D0eZqrctxmZZqplHRcGe4mmp8qRDbUHNBlMXXWi");
	//$twit->tweet("aki provando el api del twister ajjaj");
	$jsonraw = $twit->getTweets("davidvargas996");
	$rawdata = $twit->getArrayTweets($jsonraw);
	$twit->displayTable($rawdata);
?>