<?php
require('db_connect.php');
?>
<html>
<body>
<form action="manager.php" method=post>
<table>
<tr>
<td>state:</td> <td><input type=text name="state"></td>
</tr>
<tr>
<td>city:</td><td><input type=text name="city"></td>
</tr>
<tr>
<td>phone number:</td> <td><input type=text name="pnum"></td>
</tr>
<tr>
<td>edit Password: </td><td><input type=password name="epass"></td>
</tr>
<tr>
<td>confirm new password:</td> <td><input type=password name="cepass"></td>
</tr>
<tr>
<td>alternative Email:</td><td> <input type=text name="amail"></td>
</tr>
<tr>
<td><input type=submit value="edit"> 
</tr>
</table>
</form>


</body>
</html>
