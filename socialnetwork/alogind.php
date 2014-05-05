<?php
mysql_connect('localhost','root','nishant') or die("cannot connect") ;
mysql_select_db('website') or die("cannot select") ;

$q="SELECT username as n,password as p from qtable" ; //"select * from qtable where username='$luname' and password='$pass' 
$squery=mysql_query($q) ;
$flag=0 ;
 
 while($r=mysql_fetch_array($squery,MYSQL_ASSOC)) // if($squery) 
	{ if($r['n']==$_POST[luname])
	  {	if($r['p']==$_POST[lpass])
		{ $flag=1 ;
		  break ;
		}
	  }
	}	
if($flag==1)	
	{ 
		session_start() ;
		$_SESSION['username']=$_POST['luname'] ;
	    //header("location:home.php") ;
		echo "welcome ".$r['n'] ;
		?>
		
		<html>
		<body>
		<a href="http://google.com">Profile</a>
		</body>
		</html>
		<?php
	}
else
	echo "Enter Again.Incorrect username or password." ;

?>