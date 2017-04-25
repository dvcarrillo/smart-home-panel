<!DOCTYPE html>
<html>
<head>
	<title>controller</title>
</head>
<body>
<?php
	require_once("connection.php");
	require_once("evento.php");
	$anEvent = new Event();

	$anEvent->CreateStatusEvent($_POST['id'],$_POST['status'],$_POST['date']);
?>
</body>
</html>