<?php
	define("HOST","localhost");
	define("USER","root");
	define("PASSWORD","nishant");
	define("DATABASE","formsignupin");
	$dibconn=mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die("connection to database cannot be made");
	echo mysqli_connect_error();
?>