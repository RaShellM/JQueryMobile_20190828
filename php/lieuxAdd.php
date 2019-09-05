<?php 
echo 'page lieuxadd';
if(isset($_POST['streetNum'])
	&&isset($_POST['streetType'])
	&&isset($_POST['streetName'])
	&&isset($_POST['postalcode'])
	&&isset($_POST['city']))
{
	$num = $_POST["streetNum"];
	$type = $_POST["streetType"];
	$rue = $_POST["streetName"];
	$postal = $_POST["postalcode"];
	$ville = $_POST["city"];

	echo 'ici'.$num.'la';
	echo '<br>';
	echo $type;
		echo '<br>';
	echo $rue;
		echo '<br>';
	echo $postal;
		echo '<br>';
	echo $ville;
			echo '<br>';		echo '<br>';

	$query = 'INSERT INTO lieux (id, num, type, rue, postal, ville) VALUES (NULL,"'.$num.'","'.$type.'","'.$rue.'","'.$postal.'","'.$ville.'")';
	
	echo $query;
	include 'db.php';

	$dbcon->query($query);
}

?>