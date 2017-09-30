<?php

//neuzteko laiko normaliai padaryt 11 uzduoti. 
session_start();

if (isset($_POST['imonesname']) && isset($_POST['imonesnumber'])) {
		$_SESSION['imone']['name'] = $_POST['imonesname'];
		$_SESSION['imone']['number'] = $_POST['imonesnumber'];
	} 
} 

header('Location: 11uzduotis.html');
?>
