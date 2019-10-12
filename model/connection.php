<?php
	require('../vendor/autoload.php');
	require('env.php');
	$dbController = new dbController();

	$con = $dbController->connect_db(DBHOST,DBUSER,DBPWD,DBNAME);

	
?>