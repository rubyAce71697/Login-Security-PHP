<?php
	
	require_once("sesstart.php");
	
	function logincheck($email,$password,$dibconn)
	{
		$stmt=mysqli_prepare($dibconn,"select password from record where username=?") or die('mysqli error: '.mysqli_error($connection));
		if($stmt)
		{
			echo "can prepare query";
		}
		else
		{
			echo"cant prepare query";
		}
		

		
		mysqli_stmt_bind_param($stmt,'s',$email) or die("cant bind program");
		mysqli_stmt_execute($stmt) or die( 'stmt error: line 20 '.mysqli_stmt_error($stmt) );
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt,$db_password);
		#mysqli_stmt_fetch($stmt)or die( 'stmt error: line 23'.mysqli_stmt_error($stmt) );
		if($stmt->fetch())
		{
			echo"fetch works";
		}
		else
			echo "it doesnt works";
		if(mysqli_stmt_num_rows($stmt))
		{
			//check brute force
			if(/*bruteforce is true then*/ 0)
			{
				/*block the user and send the email to users alternative email id*/
			}
			else
			{
				if(strcmp($db_password,$password)==0)
				{
					sec_session_start();
					//session_start();
					$_SESSION['username']=$email;
					
					header('location:Crook_Home2.php');
					
				}
			}
		}
		else
		{
			#insert into login attempts table to check bruteforce login
			echo "invalid username or password";
			header('location: Crook_Login_Again.php');
			

		}
	}
?>