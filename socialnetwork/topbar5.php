<!DOCTYPE html>

<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

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
     <li id="megaDrop"><a href="#">Main Item 4</a> </li>
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
				
				<div class="large-4 columns">
					<p>Samuel Spade's jaw was long and bony, his chin a jutting v under the more flexible v of his mouth. His nostrils curved back to make another, smaller, v. His yellow-grey eyes were horizontal. The V motif was picked up again by thickish brows</p>
				</div>
				
				<div class="large-4 columns">
					<p>rising outward from twin creases above a hooked nose, and his pale brown hair grew down-from high flat temples-in a point on his forehead. He looked rather pleasantly like a blond Satan. He said to Effie Perine: "Yes, sweetheart?"</p>
				</div>
				
				<div class="large-4 columns">
					<p>She was a lanky sunburned girl whose tan dress of thin woolen stuff clung to her with an effect of dampness. Her eyes were brown and playful in a shiny boyish face.<br /><br />- The Maltese Falcon</p>
				</div>
				
			</div>
		
		</section>
	

		<script src="js/vendor/jquery.js"></script>
		
		<script src="js/foundation.min.js"></script>
		
		<script>
			$(document).foundation();
			
			$(document).ready(function() {
				$('#megaDrop').click(function() {
					$('#megaContainer').slideToggle(250,function(){
						//if ($(this).is(":hidden")) $("#megaDrop").html("Show");
						//else $("#megaDrop").html("Hide");
					});
					return false;
				});
				/*$('#submitme').click(function() {
					$(this).fadeOut(500);
					setTimeout(function() {
					    $('#progress').fadeIn(500);
					    $('#progress .meter').animate({width : '100%'},2000);
					    setTimeout(function() {
					    	$('#progress').fadeOut(500);
					    	setTimeout(function() {
								 $('.alert-box').fadeIn(500);
							}, 500);
					    }, 2500);
					}, 500);
				});
				$('.close').click(function() {
					$('.alert-box').fadeOut(500);
					$('#progress .meter').css({width : '0%'});
					setTimeout(function() {
						$('input, textarea').not('input[type=submit]').val('');
						$('#submitme').fadeIn(500);
					}, 500);
					
					return false;
				});
			});
			*/
			});
		</script>
		
	</body>
	
</html>