<?php 

if(isset($_POST['username'])){
	$nom = $_POST["username"];
	include 'db.php';
	$dbcon->query('INSERT INTO users VALUES (NULL,"'.$nom.'")');
}
?>