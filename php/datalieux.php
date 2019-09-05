<?php

$streetNum = $_POST["streetNum"];
$streetName = $_POST['streetName'];
$city = $_POST["city"];
$eval = $_POST["eval"];
$table = $_POST["table"];
$chair = $_POST["chair"];

echo("num : ".$streetNum. "
	<br> rue : ".$streetName." 
	<br> ville : ".$city."
	<br> equipement table : ".$table."
	<br> equipement chaise haute :".$chair."
	<br> evaluation globale : ".$eval." /5 ");

?>