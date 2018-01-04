<?php

	$user	  = 'root';
	$pass	  = 'root';
	$host	  = 'localhost';
	$database = 'gntr_app';

	$sql = mysql_connect($host, $user, $pass);
	mysql_select_db($database, $sql);
	
	if (!$sql) {
		die('Could not connect : ' . mysql_errno() . mysql_error());
	}
?>