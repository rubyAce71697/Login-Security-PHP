<!DOCTYPE html>

<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<script language='javascript' type='text/javascript'>
/*		function loadfunc(id)
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
				var ajaxDisplay= document.getElementById(#megacontainer);
				
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
				
				
				
/*			}
		}
		//now get value from user and pass to server script
		
		/*var uname = document.getElementById('uname').value;
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
		
		ajaxRequest.load("index.html");
		ajaxRequest.send(null);
		}
	*/
/*	$('.menu4').click(function(e){
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "index.html",
        data: {},
        success: function(data){
            $('#megaconrtainer').html(data);
        }
    });
});
	*/
	</script>

			
	<head>
	
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width" />
		
		<title>Foundation 4 | Contact Form</title>
		
		<link rel="stylesheet" href="css/foundation.css" />
		
		<link rel="stylesheet" href="css/app.css" />
		
		<script src="js/vendor/custom.modernizr.js"></script>
	
	</head>
	
	<body>
<nav class="top-bar" data-options="is_hover:false">
 <ul class="title-area">
   <!-- Title Area -->
   <li class="name">
     <h1><a href="#">Top Bar Title </a></h1>
   </li>
   <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
   <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
 </ul>
 <section class="top-bar-section">
   <!-- Left Nav Section -->
   <ul class="left">
     <li class="divider"></li>
     <li class="active"><a href="#">Main Item 1</a></li>
     <li class="divider"></li>
     <li><a href="#">Main Item 2</a></li>
     <li class="divider"></li>
     <li ><a href="#">Main Item 3</a></li>
     <li class="divider"></li>
   </ul>

   <!-- Right Nav Section -->
   <ul class="right">
     <li class="divider hide-for-small"></li>
     <li id="megaDrop" class="menu4"><a href="#">Main Item-4</a> </li>
     <li class="divider"></li>
     <!--<li class="has-form">
       <form>
         <div class="row collapse">
           <div class="small-8 columns">
             <input type="text">
           </div>
           <div class="small-4 columns">
             <a href="#" class="alert button">Search</a>
           </div>
         </div>
       </form>
     </li>
     <li class="divider show-for-small"></li>
     <li class="has-form">
       <a class="button" href="#">Button!</a>
     </li>-->
   </ul>
 </section>
	
	
</nav>
	<section id="megaContainer" style="display:none">
			
			<div class="row">
				
				<!--<div class="large-4 columns">
					<p>Samuel Spade's jaw was long and bony, his chin a jutting v under the more flexible v of his mouth. His nostrils curved back to make another, smaller, v. His yellow-grey eyes were horizontal. The V motif was picked up again by thickish brows</p>
				</div>
				
				<div class="large-4 columns">
					<p>rising outward from twin creases above a hooked nose, and his pale brown hair grew down-from high flat temples-in a point on his forehead. He looked rather pleasantly like a blond Satan. He said to Effie Perine: "Yes, sweetheart?"</p>
				</div>
				
				<div class="large-4 columns">
					<p>She was a lanky sunburned girl whose tan dress of thin woolen stuff clung to her with an effect of dampness. Her eyes were brown and playful in a shiny boyish face.<br /><br />- The Maltese Falcon</p>
				</div>
				-->
			</div>
		
		</section>
	

		<script src="js/vendor/jquery.js"></script>
		
		<script src="js/foundation.min.js"></script>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		-->
		<script>
			$(document).foundation();
			
			$(function(){
				$(document).ready(function() {
					$('.menu4').click(function() {
						$('#megaContainer').slideToggle(250,function(){
								
							/*$('.menu4').click(function() {*/
								$("#megacontainer").load("/load.html");
							});
						return false;
						});
					});
			});
					
		</script>
		
	</body>
	
</html>