<?php
	require_once("sesstart.php");
	sec_session_start();
/*	if(empty($_SESSION['username']))
	{
		header("location:crookbook.php");
	}
	else
	{
		echo $_SESSION['username'];
*/
		?>


	<html>
	<head>
	<title>Crook Home: <?php echo $_SESSION['username'];?></title>
	<link rel="stylesheet" href="homestyle.css" type="text/css">
	</head>
	<body style="background-color: #404035;"> 
	<div id="headerDiv">
	<div id="titleText">
		<a href="#">Crook Home</a>
	</div>
	<!--<h1 style="color:#00a2d3;font-size:40px;margin-top:0px;text-decoration:bold">Crook Home</h1>
	-->
	
	</div>
	<div id="wrapper">
	
	
	<h1>Hello you are logged in<?php echo $_SESSION['username'];?></h1>
	<a href="Crook_Logout.php">Logout</a>
	</div>
	</body>
	</html>
	<?php
	#}
	?>