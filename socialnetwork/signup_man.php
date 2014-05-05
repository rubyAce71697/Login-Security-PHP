<?php
 require('db_connect.php');
 require_once("sesstart.php");
 $fname = $_GET['fname'];
 $lname = $_GET['lname'];
 $uname = $_GET['uname'];
 $email = $_GET['email'];
 $pass 	= $_GET['pass'];
 $cpass = $_GET['cpass'];
 $gender= $_GET['gender'];
 $date 	= $_GET['date'];
 $month = $_GET['month'];
 $year 	= $_GET['year'];
 $dob = $date."/".$month."/".$year;

 if($fname==''or $lname==''or $uname=='' or $pass=='' or $cpass=='' or $email=='' or $gender=='')
	 {
		$display_string = "All the fields are needed to be filled";
		$flag=1;
	 }
 else if(strcmp($pass,$cpass))
	{	
        $display_string = "Both the password fields are required to be same"; 
		$flag=1 ;
	}
	
	else
	{
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		//check whether email already exists or not
		$query = "SELECT * FROM record WHERE username = '$uname'";
		$res = mysqli_query($dibconn, $query);
		$rows= mysqli_fetch_row($res);
		if($rows[0])
		{
			$display_string = "Username already taken.  Enter again";
			$flag=1;
		}
		else if (!preg_match($regex, $email)) 
		{
			$flag=1;
			$display_string = "Email is required to be in format email@myexample.com";
		}
		else
		{
			//check whether email already exists or not
			$query = "SELECT * FROM record WHERE email = '$email'";
			$res = mysqli_query($dibconn, $query);
			$rows= mysqli_fetch_row($res);
			if($rows[0])
			{
				$display_string = "Email id already taken.  Enter again";
				$flag=1;
			}

			
		}
	}
		  
	 
if(!isset($flag))
{
   $query="INSERT INTO record (firstname,lastname,username,email,password,gender, date) VALUES('$fname','$lname','$uname','$email','$pass','$gender', '$dob' )";
	  mysqli_query($dibconn,$query);
			
	//echo "The record was succesfully added to the database!" ;
	
	$display_string = "redirect";
	echo $display_string;
	
}
else
	echo $display_string;

?>