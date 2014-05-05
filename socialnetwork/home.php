
<?php
require_once('sesstart.php');

session_start() ;
if(empty($_SESSION['username']))
{
?>

<script>
window.location.replace('question.php') ;
</script>

<?php

  //header("location:question.php") ;
}
else{
?>

<html>
<body>
<!--<h3 style="color:blue ; margin-left:center" >wlecome user</h3>-->


</h3>
<a href="logout.php">logout</a>
</body>
</html>

<?php
}

?>