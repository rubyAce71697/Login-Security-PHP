<?php
	require('sesstart.php');
?>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>CrookBook: Sign up Login Chat</title>
  <link rel="stylesheet" href="style.css">

	<script language='javascript' type='text/javascript'>
		function chkdtls()
		{
			var ajaxRequest;		//variable that makes ajax possible - will store ajax request
		try{
					// Opera 8.0+, Firefox, Safari
			ajaxRequest = new XMLHttpRequest();
			}catch (e){
					// Internet Explorer Browsers
			try{
					ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
				}catch (e) {
								try{
										ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
									}catch (e){
												// Something went wrong
												alert("Your browser broke!");
												return false;
											}
							}
						}
		
		//create a function thar will recieve the data from server page and update data on same page
		ajaxRequest.onreadystatechange= function()
		{
			if(ajaxRequest.readyState==4 && ajaxRequest.status ==200)
			{
				var ajaxDisplay= document.getElementById('signup_msg');
				
				//ajaxDisplay.innerHTML = ajaxRequest.responseText;
				var text = ajaxRequest.responseText;
				ajaxDisplay.innerHTML = text;
				
				var redirect = "redirect";
				if(redirect === text)
				{
					window.location.href = "Crook_Home.php?ref_id = ";
					
					//ajaxDisplay.innerHTML = text;
					
				}
				else
				{
					//ajaxDisplay.innerHTML = "not equal";
				}
				/*	
				<?
				echo "out if";
				if(?>!(text-redirect); alert("checking condition");<? )
				{
					
						sec_session_start();
						$_SESSION['username']=$uname;
						header('location:Crook_Home.php');
						echo "here";
					?>
						ajaxDisplay.innerHTML = ajaxRequest.responseText;
				<?
				}
				else
				{
				?>
				
				ajaxDisplay.innerHTML = ajaxRequest.responseText;

				<?
				}
				?>
				*/
				
				
				
			}
		}
		//now get value from user and pass to server script
		
		var uname = document.getElementById('uname').value;
		var pass = document.getElementById('pass').value;
		var cpass = document.getElementById('cpass').value;
		var email = document.getElementById('email').value;
		var gender = document.getElementById('gender').value;
		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var date = document.getElementById('date').value;
		var month = document.getElementById('month').value;
		var year = document.getElementById('year').value;
		querystring= "?uname=" +uname+ "&pass=" +pass+ "&cpass=" +cpass+ "&email=" +email+ "&fname=" +fname+ "&lname=" +lname+ "&gender="+gender+ "&date="+ date+ "&month="+ month +"&year="+year;
		ajaxRequest.open("GET","signup_man.php"+querystring ,true);
		ajaxRequest.send(null);
		}
	</script>
			
  
 </head>


<!-- login division -->


<body>
  <form name="loginform" class="login" method = 'post' action="alogin.php">
    <p style="color:#FEFCFF;font-size:20px" id="loginHead">Login:</p>
	
	<p>
      
      <input type="text" name="luname" id="login" placeholder="Email ID">
    </p>

    <p>
     
      <input type="password" name="lpass" id="password" placeholder="password">
    </p>

    <p class="login-submit">
      <input type="submit" class="login-button" >
    </p>

    <p class="forgot-password"><a href="index.php">Forgot your password?</a></p>
  </form>
 <h1 style="color:#00a2d3;font-size:90px;margin-top:60px;text-decoration:bold">CrookBook</h1>


 
 
 <!-- Sign up division --> 

 <form name="signup"  class="signup" method = 'GET'>
 <!-- method="post" action="manager.php" -->
    <p style="color:#FEFCFF;font-size:20px ; padding-bottom:10px;margin-left:-100px">Not a member yet? Signup here :</p>
    <p id="signup_msg" style="color:#FEFCFF;font-size:15px ; padding-bottom:10px;margin-left:-100px"></p>
	
	<p>
	<input type=text name="fname" id="fname" placeholder="Enter your first name">
	</p>
	<p>
	<input type=text name="lname" id="lname" placeholder="Enter your Last name">	
	</p>
	<p>
	<input type=text name="uname" id="uname" placeholder="Enter the desired username">
	</p>
	<p>
      <input type="text" name="email" id="email"  placeholder="Email ID">
    </p>
	<p>
	<input type=password name="pass" id = "pass" placeholder="Enter password">
	</p>
	<p>
	<input type=password name="cpass" id="cpass" placeholder="Confirm password">
	</p>
    <p>
	<input type=radio name="gender" id="gender" value="male">male
	<input type=radio name="gender" id="gender" value="female">female
   </p>
   <p>
   Date Of Birth:
   <select name="month" id = "month">
		<?php
			$i=0 ;
			for($i=1;$i<=12;$i++)
				echo '<option value=$i>'.$i.'</option>' ;
		?>
	</select>
	<select name="date" id="date">
		<?php
			$i=0 ;
			for($i=1;$i<=31;$i++)
				echo '<option value=$i>'.$i.'</option>' ;
		?>
	</select>			
   <select name="year" id="year">
		<?php
			$i=0 ;
			for($i=1994;$i<=2013;$i++)
				echo '<option value=$i>'.$i.'</option>' ;
		?>
	</select>
   
   
   </p>


   <p>
   <input type=button value="Sign Up!" onclick=chkdtls() style="width:150px;height:30px;background:#00a2d3;border-radius:7px;color:#FEFCFF;margin-top:10px">
   </p>
   
    
  </form>
 
 <!--<section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/dark-login-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/dark-login-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2012&ndash;2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://365psd.com/day/2-234/" target="_blank">Rich McNabb</a>
  </section> -->
</body>
</html>
